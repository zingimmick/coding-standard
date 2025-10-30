<?php

declare(strict_types=1);

namespace Zing\CodingStandard;

use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\FixerFactory;
use PhpCsFixer\RuleSet\AutomaticRuleSetDefinitionInterface;
use PhpCsFixer\RuleSet\DeprecatedRuleSetDefinitionInterface;
use PhpCsFixer\RuleSet\RuleSet;
use PhpCsFixer\RuleSet\RuleSetDefinitionInterface;
use PhpCsFixer\RuleSet\RuleSets;
use Zing\CodingStandard\Printers\RuleSetPrinter;

final class PhpCsFixerRuleSetGenerator
{
    private const MAP = [
        '@DoctrineAnnotation' => 'doctrine-annotation.php',
        '@PER-CS' => 'per-cs.php',
        '@PER-CS1x0' => 'per-cs1x0.php',
        '@PER-CS1x0:risky' => 'per-cs1x0-risky.php',
        '@PER-CS2x0' => 'per-cs2x0.php',
        '@PER-CS2x0:risky' => 'per-cs2x0-risky.php',
        '@PER-CS3x0' => 'per-cs3x0.php',
        '@PER-CS3x0:risky' => 'per-cs3x0-risky.php',
        '@PER-CS:risky' => 'per-cs-risky.php',
        '@PHP5x4Migration' => 'php5x4-migration.php',
        '@PHP5x6Migration:risky' => 'php5x6-migration-risky.php',
        '@PHP7x0Migration' => 'php7x0-migration.php',
        '@PHP7x0Migration:risky' => 'php7x0-migration-risky.php',
        '@PHP7x1Migration' => 'php7x1-migration.php',
        '@PHP7x1Migration:risky' => 'php7x1-migration-risky.php',
        '@PHP7x3Migration' => 'php7x3-migration.php',
        '@PHP7x4Migration' => 'php7x4-migration.php',
        '@PHP7x4Migration:risky' => 'php7x4-migration-risky.php',
        '@PHP8x0Migration' => 'php8x0-migration.php',
        '@PHP8x0Migration:risky' => 'php8x0-migration-risky.php',
        '@PHP8x1Migration' => 'php8x1-migration.php',
        '@PHP8x2Migration' => 'php8x2-migration.php',
        '@PHP8x2Migration:risky' => 'php8x2-migration-risky.php',
        '@PHP8x3Migration' => 'php8x3-migration.php',
        '@PHP8x4Migration' => 'php8x4-migration.php',
        '@PHP8x5Migration' => 'php8x5-migration.php',
        '@PHPUnit3x0Migration:risky' => 'phpunit3x0-migration-risky.php',
        '@PHPUnit3x2Migration:risky' => 'phpunit3x2-migration-risky.php',
        '@PHPUnit3x5Migration:risky' => 'phpunit3x5-migration-risky.php',
        '@PHPUnit4x3Migration:risky' => 'phpunit4x3-migration-risky.php',
        '@PHPUnit4x8Migration:risky' => 'phpunit4x8-migration-risky.php',
        '@PHPUnit5x0Migration:risky' => 'phpunit5x0-migration-risky.php',
        '@PHPUnit5x2Migration:risky' => 'phpunit5x2-migration-risky.php',
        '@PHPUnit5x4Migration:risky' => 'phpunit5x4-migration-risky.php',
        '@PHPUnit5x5Migration:risky' => 'phpunit5x5-migration-risky.php',
        '@PHPUnit5x6Migration:risky' => 'phpunit5x6-migration-risky.php',
        '@PHPUnit5x7Migration:risky' => 'phpunit5x7-migration-risky.php',
        '@PHPUnit6x0Migration:risky' => 'phpunit6x0-migration-risky.php',
        '@PHPUnit7x5Migration:risky' => 'phpunit7x5-migration-risky.php',
        '@PHPUnit8x4Migration:risky' => 'phpunit8x4-migration-risky.php',
        '@PHPUnit9x1Migration:risky' => 'phpunit9x1-migration-risky.php',
        '@PHPUnit10x0Migration:risky' => 'phpunit10x0-migration-risky.php',
        '@PSR1' => 'psr1.php',
        '@PSR2' => 'psr2.php',
        '@PSR12' => 'psr12.php',
        '@PSR12:risky' => 'psr12-risky.php',
        '@PhpCsFixer' => 'php-cs-fixer.php',
        '@PhpCsFixer:risky' => 'php-cs-fixer-risky.php',
        '@Symfony' => 'symfony.php',
        '@Symfony:risky' => 'symfony-risky.php',
        'custom' => '../php-cs-fixer-custom.php',
    ];

    public function __construct(
        private RuleSetPrinter $ruleSetPrinter
    ) {
    }

    public function generate(): void
    {
        foreach ($this->getSetDefinitions() as $setDefinition) {
            if ($setDefinition instanceof DeprecatedRuleSetDefinitionInterface) {
                continue;
            }

            if ($setDefinition instanceof AutomaticRuleSetDefinitionInterface) {
                continue;
            }

            $fixerFactory = new FixerFactory();
            $fixerFactory->registerBuiltInFixers();
            file_put_contents(
                \sprintf(__DIR__ . '/../config/set/php-cs-fixer/%s', self::MAP[$setDefinition->getName()]),
                $this->ruleSetPrinter->print($this->formatRulesToServices($fixerFactory, $setDefinition))
            );
        }
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public function formatRulesToServices(
        FixerFactory $fixerFactory,
        RuleSetDefinitionInterface $ruleSetDescription
    ): array {
        $services = [];
        $ruleSet = new RuleSet($ruleSetDescription->getRules());
        foreach ($fixerFactory->useRuleSet($ruleSet)->getFixers() as $fixer) {
            $services[$fixer::class] = [];
            $config = $ruleSet->getRuleConfiguration($fixer->getName());
            if ($fixer instanceof ConfigurableFixerInterface && $config) {
                $services[$fixer::class] = $config;
            }
        }

        return $services;
    }

    /**
     * @return array<string, mixed>
     */
    private function getSetDefinitions(): \Iterator
    {
        yield from RuleSets::getSetDefinitions();

        yield new CustomSet();
    }
}
