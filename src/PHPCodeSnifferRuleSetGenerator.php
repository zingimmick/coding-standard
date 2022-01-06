<?php

declare(strict_types=1);

namespace Zing\CodingStandard;

use PHP_CodeSniffer\Config;
use PHP_CodeSniffer\Ruleset;
use PHP_CodeSniffer\Runner;
use PhpParser\BuilderHelpers;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\ClassConstFetch;
use PhpParser\Node\Expr\Closure;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar\LNumber;
use PhpParser\Node\Stmt\Declare_;
use PhpParser\Node\Stmt\DeclareDeclare;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Stmt\Nop;
use PhpParser\Node\Stmt\Return_;
use PhpParser\Node\Stmt\Use_;
use PhpParser\Node\Stmt\UseUse;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\Finder\Finder;

final class PHPCodeSnifferRuleSetGenerator
{
    /**
     * @var array<string, string>
     */
    private const MAP = [
        'Generic' => 'generic.php',
        'MySource' => 'my-source.php',
        'PEAR' => 'pear.php',
        'PSR1' => 'psr1.php',
        'PSR2' => 'psr2.php',
        'PSR12' => 'psr12.php',
        'Squiz' => 'squiz.php',
        'Zend' => 'zend.php',
        'SlevomatCodingStandard' => 'slevomat-coding-standard.php',
    ];

    /**
     * @var string
     */
    private const SERVICES = 'services';

    private function printRuleSet(Ruleset $ruleset): string
    {
        $sniffs = [];
        foreach ($ruleset->sniffs as $sniff) {
            $sniffs[is_object($sniff) ? get_class($sniff) : $sniff] = [];
        }

        foreach ($ruleset->ruleset as $code => $attr) {
            if (isset($ruleset->sniffCodes[$code])) {
                $sniff = $ruleset->sniffCodes[$code];

                $sniffs[$sniff] = $attr['properties'] ?? [];
            }
        }

        $services = [];
        foreach ($sniffs as $sniff => $property) {
            $expr = new MethodCall(new Variable(self::SERVICES), 'set', [
                new Arg(new ClassConstFetch(new Name\FullyQualified($sniff), 'class')),
            ]);
            foreach ($property as $key => $value) {
                $expr = new MethodCall($expr, 'property', [
                    new Arg(BuilderHelpers::normalizeValue($key)),
                    new Arg(BuilderHelpers::normalizeValue($value)),
                ]);
            }

            $services[] = new Expression($expr);
        }

        array_unshift(
            $services,
            new Expression(new Assign(new Variable(self::SERVICES), new MethodCall(new Variable(
                'containerConfigurator'
            ), self::SERVICES)))
        );

        return (new Printer([
            'shortArraySyntax' => true,
        ]))
            ->prettyPrintFile([
                new Declare_([new DeclareDeclare('strict_types', new LNumber(1))]),
                new Nop(),
                new Use_([new UseUse(new Name(ContainerConfigurator::class))]),
                new Nop(),
                new Return_(new Closure([
                    'static' => true,
                    'returnType' => 'void',
                    'params' => [
                        new Param(new Variable('containerConfigurator'), null, new Name('ContainerConfigurator')),
                    ],
                    'stmts' => $services,
                ])),
                new Nop(),
            ]);
    }

    public function generate(): void
    {
        $runner = new Runner();
        $runner->config = new Config();
        $runner->init();
        foreach ($this->getSetDefinitions() as $setDefinition) {
            $runner->config->standards = [$setDefinition->getPath()];
            $ruleset = (new Ruleset($runner->config));
            $sniffs = $ruleset->processRuleset($setDefinition->getRealPath());
            $ruleset->registerSniffs($sniffs, [], []);

            file_put_contents(
                sprintf(__DIR__ . '/../config/set/php_codesniffer/%s', self::MAP[$setDefinition->getRelativePath()]),
                $this->printRuleSet($ruleset)
            );
        }
    }

    /**
     * @return iterable<\Symfony\Component\Finder\SplFileInfo>
     */
    private function getSetDefinitions(): iterable
    {
        yield from Finder::create()
            ->files()
            ->in(__DIR__ . '/../vendor/symplify/easy-coding-standard/vendor/squizlabs/php_codesniffer/src/Standards')
            ->name('ruleset.xml');

        yield from Finder::create()
            ->files()
            ->in(__DIR__ . '/../vendor/slevomat/coding-standard')
            ->name('ruleset.xml');
    }
}
