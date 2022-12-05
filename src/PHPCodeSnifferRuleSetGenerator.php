<?php

declare(strict_types=1);

namespace Zing\CodingStandard;

use PHP_CodeSniffer\Config;
use PHP_CodeSniffer\Ruleset;
use PHP_CodeSniffer\Runner;
use Symfony\Component\Finder\Finder;
use Zing\CodingStandard\Printers\RuleSetPrinter;

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
        'PHPCodeSnifferCustom' => '../php_codesniffer.php',
        'SlevomatCodingStandardCustom' => '../slevomat-coding-standard.php',
    ];

    public function __construct(
        private RuleSetPrinter $ruleSetPrinter
    ) {
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
                $this->ruleSetPrinter->print($this->formatRulesToServices($ruleset))
            );
        }
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    private function formatRulesToServices(Ruleset $ruleset): array
    {
        $sniffs = [];
        $isStandard = str_contains($ruleset->name, 'Custom');
        $sniffs = $this->formatSniffs($ruleset->sniffs, $isStandard);

        foreach ($ruleset->ruleset as $code => $attr) {
            if (! isset($ruleset->sniffCodes[$code])) {
                continue;
            }

            $sniff = $ruleset->sniffCodes[$code];
            if (! $this->isPhpSniff($sniff, $isStandard)) {
                continue;
            }

            $sniffs[$sniff] = $attr['properties'] ?? [];
        }

        return $sniffs;
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    private function formatSniffs(array $sniffs, bool $isStandard = false): array
    {
        foreach ($sniffs as $sniff) {
            if (! $this->isPhpSniff($sniff, $isStandard)) {
                continue;
            }

            $sniffs[\is_object($sniff) ? $sniff::class : $sniff] = [];
        }

        return $sniffs;
    }

    private function isPhpSniff($sniff, bool $isStandard = false): bool
    {
        if (! $isStandard) {
            return true;
        }

        if (! class_exists($sniff)) {
            return false;
        }

        $sniffObject = new $sniff();
        if (! property_exists($sniffObject, 'supportedTokenizers')) {
            return true;
        }

        return \in_array('PHP', $sniffObject->supportedTokenizers, true);
    }

    /**
     * @return iterable<\Symfony\Component\Finder\SplFileInfo>
     */
    private function getSetDefinitions(): \Iterator
    {
        yield from Finder::create()
            ->files()
            ->in(__DIR__ . '/../vendor/symplify/easy-coding-standard/vendor/squizlabs/php_codesniffer/src/Standards')
            ->name('ruleset.xml');

        yield from Finder::create()
            ->files()
            ->in(__DIR__ . '/../vendor/slevomat/coding-standard')
            ->name('ruleset.xml');

        yield from Finder::create()
            ->files()
            ->in(__DIR__ . '/Standards')
            ->name('ruleset.xml');
    }
}
