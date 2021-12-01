<?php

declare(strict_types=1);

namespace Zing\CodingStandard;

use InvalidArgumentException;
use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\FixerFactory;
use PhpCsFixer\RuleSet\RuleSet;
use PhpCsFixer\RuleSet\RuleSetDescriptionInterface;
use PhpCsFixer\RuleSet\RuleSets;
use PhpParser\BuilderHelpers;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\ArrayItem;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\ClassConstFetch;
use PhpParser\Node\Expr\Closure;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar\LNumber;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Declare_;
use PhpParser\Node\Stmt\DeclareDeclare;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Stmt\Nop;
use PhpParser\Node\Stmt\Return_;
use PhpParser\Node\Stmt\Use_;
use PhpParser\Node\Stmt\UseUse;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

final class PhpCsFixerRuleSetGenerator
{
    /**
     * @var array<string, string>
     */
    private const MAP = [
        '@DoctrineAnnotation' => 'doctrine-annotation.php',
        '@PHP54Migration' => 'php54-migration.php',
        '@PHP56Migration:risky' => 'php56-migration-risky.php',
        '@PHP70Migration' => 'php70-migration.php',
        '@PHP70Migration:risky' => 'php70-migration-risky.php',
        '@PHP71Migration' => 'php71-migration.php',
        '@PHP71Migration:risky' => 'php71-migration-risky.php',
        '@PHP73Migration' => 'php73-migration.php',
        '@PHP74Migration' => 'php74-migration.php',
        '@PHP74Migration:risky' => 'php74-migration-risky.php',
        '@PHP80Migration' => 'php80-migration.php',
        '@PHP80Migration:risky' => 'php80-migration-risky.php',
        '@PHP81Migration' => 'php81-migration.php',
        '@PHPUnit30Migration:risky' => 'phpunit30-migration-risky.php',
        '@PHPUnit32Migration:risky' => 'phpunit32-migration-risky.php',
        '@PHPUnit35Migration:risky' => 'phpunit35-migration-risky.php',
        '@PHPUnit43Migration:risky' => 'phpunit43-migration-risky.php',
        '@PHPUnit48Migration:risky' => 'phpunit48-migration-risky.php',
        '@PHPUnit50Migration:risky' => 'phpunit50-migration-risky.php',
        '@PHPUnit52Migration:risky' => 'phpunit52-migration-risky.php',
        '@PHPUnit54Migration:risky' => 'phpunit54-migration-risky.php',
        '@PHPUnit55Migration:risky' => 'phpunit55-migration-risky.php',
        '@PHPUnit56Migration:risky' => 'phpunit56-migration-risky.php',
        '@PHPUnit57Migration:risky' => 'phpunit57-migration-risky.php',
        '@PHPUnit60Migration:risky' => 'phpunit60-migration-risky.php',
        '@PHPUnit75Migration:risky' => 'phpunit75-migration-risky.php',
        '@PHPUnit84Migration:risky' => 'phpunit84-migration-risky.php',
        '@PSR1' => 'psr1.php',
        '@PSR12' => 'psr12.php',
        '@PSR12:risky' => 'psr12-risky.php',
        '@PSR2' => 'psr2.php',
        '@PhpCsFixer' => 'php-cs-fixer.php',
        '@PhpCsFixer:risky' => 'php-cs-fixer-risky.php',
        '@Symfony' => 'symfony.php',
        '@Symfony:risky' => 'symfony-risky.php',
        'laravel' => 'laravel.php',
    ];

    /**
     * @var string
     */
    private const SERVICES = 'services';

    private function printRuleSetDescription2(
        FixerFactory $fixerFactory,
        RuleSetDescriptionInterface $ruleSetDescription
    ): string {
        $services = [];
        $ruleSet = new RuleSet($ruleSetDescription->getRules());
        foreach ($fixerFactory->useRuleSet($ruleSet)->getFixers() as $fixer) {
            $config = $ruleSet->getRuleConfiguration($fixer->getName());
            $expr = new MethodCall(new Variable(self::SERVICES), 'set', [
                new Arg(new ClassConstFetch(new Name\FullyQualified(get_class($fixer)), 'class')),
            ]);
            if ($fixer instanceof ConfigurableFixerInterface && $config) {
                $configuration = new ArrayItem(new Array_(array_map(function ($value, $key): ArrayItem {
                    return new ArrayItem(BuilderHelpers::normalizeValue($value), BuilderHelpers::normalizeValue($key));
                }, $config, array_keys($config))));
                $expr = new MethodCall($expr, 'call', [
                    new Arg(new String_('configure')),
                    new Arg(new Array_([$configuration])),
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
        foreach ($this->getSetDefinitions() as $setDefinition) {
            $fixerFactory = new FixerFactory();
            $fixerFactory->registerBuiltInFixers();
            file_put_contents(
                sprintf(__DIR__ . '/../config/set/php-cs-fixer/%s', self::MAP[$setDefinition->getName()]),
                $this->printRuleSetDescription2($fixerFactory, $setDefinition)
            );
        }
    }

    /**
     * @return array<string, mixed>
     */
    private function getSetDefinitions(): array
    {
        $setDefinitions = RuleSets::getSetDefinitions();
        $setDefinitions['laravel'] = $this->getLaravelRuleSet();

        return $setDefinitions;
    }

    /**
     * @return object|void
     */
    private function getLaravelRuleSet(): ?LaravelSet
    {
        $rules = null;
        file_put_contents(
            sys_get_temp_dir() . '/laravel.php',
            file_get_contents(
                'https://gist.githubusercontent.com/laravel-shift/cab527923ed2a109dda047b97d53c200/raw/.php-cs-fixer.php'
            ),
            LOCK_EX
        );

        try {
            require sys_get_temp_dir() . '/laravel.php';
        } catch (InvalidArgumentException $invalidArgumentException) {
            print_r($invalidArgumentException->getMessage());
        }

        if (! isset($rules)) {
            return null;
        }

        return new LaravelSet($rules);
    }
}
