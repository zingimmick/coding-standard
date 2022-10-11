<?php

declare(strict_types=1);

namespace Zing\CodingStandard;

use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\FixerFactory;
use PhpCsFixer\RuleSet\RuleSet;
use PhpCsFixer\RuleSet\RuleSetDescriptionInterface;
use PhpCsFixer\RuleSet\RuleSets;
use PhpParser\ConstExprEvaluator;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Stmt;
use PhpParser\Node\Stmt\Return_;
use PhpParser\ParserFactory;
use Zing\CodingStandard\Printers\RuleSetPrinter;

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
        '@PER' => 'per.php',
        '@PER:risky' => 'per-risky.php',
        '@PSR1' => 'psr1.php',
        '@PSR12' => 'psr12.php',
        '@PSR12:risky' => 'psr12-risky.php',
        '@PSR2' => 'psr2.php',
        '@PhpCsFixer' => 'php-cs-fixer.php',
        '@PhpCsFixer:risky' => 'php-cs-fixer-risky.php',
        '@Symfony' => 'symfony.php',
        '@Symfony:risky' => 'symfony-risky.php',
        'laravel' => 'laravel.php',
        'custom' => '../php-cs-fixer-custom.php',
    ];

    public function __construct(
        private RuleSetPrinter $ruleSetPrinter,
        private ParserFactory $parserFactory,
        private ConstExprEvaluator $constExprEvaluator
    ) {
    }

    public function generate(): void
    {
        foreach ($this->getSetDefinitions() as $setDefinition) {
            $fixerFactory = new FixerFactory();
            $fixerFactory->registerBuiltInFixers();
            file_put_contents(
                sprintf(__DIR__ . '/../config/set/php-cs-fixer/%s', self::MAP[$setDefinition->getName()]),
                $this->ruleSetPrinter->print($this->formatRulesToServices($fixerFactory, $setDefinition))
            );
        }
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public function formatRulesToServices(
        FixerFactory $fixerFactory,
        RuleSetDescriptionInterface $ruleSetDescription
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
    private function getSetDefinitions(): iterable
    {
        yield from RuleSets::getSetDefinitions();

        yield $this->getLaravelRuleSet();

        yield new CustomSet();
    }

    private function getLaravelRuleSet(): ?LaravelSet
    {
        $rules = $this->getLaravelRules();

        foreach (array_keys($rules) as $rule) {
            if (str_starts_with($rule, 'Laravel/')) {
                unset($rules[$rule]);
            }
        }

        if (! isset($rules)) {
            return null;
        }

        return new LaravelSet($rules);
    }

    /**
     * @return array<string, mixed>[]|bool[]|null
     */
    private function getLaravelRules(): ?array
    {
        $contents = file_get_contents(
            __DIR__.'/../laravel.php'
        );
        $stmts = $this->parserFactory->create(ParserFactory::PREFER_PHP7)->parse($contents);
        foreach ($stmts as $stmt) {
            $expr = $this->findLaravelRulesExprFromStmt($stmt);
            if (! $expr instanceof \PhpParser\Node\Expr) {
                continue;
            }

            return $this->constExprEvaluator->evaluateDirectly($stmt->expr->args[0]->value);
        }

        return null;
    }

    private function findLaravelRulesExprFromStmt(Stmt $stmt): ?Expr
    {
        if (! $stmt instanceof Return_) {
            return null;
        }

        if (! $stmt->expr instanceof StaticCall) {
            return null;
        }

        if ($stmt->expr->args === []) {
            return null;
        }

        if (! $stmt->expr->args[0]->value instanceof Array_) {
            return null;
        }

        return $stmt->expr->args[0]->value;
    }
}
