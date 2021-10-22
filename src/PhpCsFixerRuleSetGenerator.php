<?php

declare(strict_types=1);

namespace Zing\CodingStandard;

use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\Fixer\FixerInterface;
use PhpCsFixer\FixerFactory;
use PhpCsFixer\RuleSet\RuleSet;
use PhpCsFixer\RuleSet\RuleSetDescriptionInterface;
use PhpCsFixer\RuleSet\RuleSets;

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
    ];

    private function printFixer(FixerInterface $fixer, ?array $config): string
    {
        if (! $fixer instanceof ConfigurableFixerInterface) {
            return sprintf('    $services->set(\\%s::class);', get_class($fixer));
        }

        if (! $config) {
            return sprintf('    $services->set(\\%s::class);', get_class($fixer));
        }

        return sprintf("    \$services->set(\\%s::class)
        ->call('configure', [
            %s
        ]);", get_class($fixer), $this->printArray($config));
    }

    private function printRuleSetDescription(
        FixerFactory $fixerFactory,
        RuleSetDescriptionInterface $ruleSetDescription
    ) {
        $services = [];
        $ruleSet = new RuleSet($ruleSetDescription->getRules());
        foreach ($fixerFactory->useRuleSet($ruleSet)->getFixers() as $fixer) {
            $config = $ruleSet->getRuleConfiguration($fixer->getName());
            $services[$fixer->getName()] = $this->printFixer($fixer, $config);
        }

        $services = implode(PHP_EOL, $services);

        return <<<CODE_SAMPLE
<?php

declare(strict_types=1);

use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator;

return static function (ContainerConfigurator \$containerConfigurator): void {
    \$services = \$containerConfigurator->services();
{$services}
};
CODE_SAMPLE;
    }

    public function generate(): void
    {
        foreach (RuleSets::getSetDefinitions() as $ruleSetDescription) {
            $fixerFactory = new FixerFactory();
            $fixerFactory->registerBuiltInFixers();
            file_put_contents(
                sprintf(__DIR__ . '/../config/set/php-cs-fixer/%s', self::MAP[$ruleSetDescription->getName()]),
                $this->printRuleSetDescription($fixerFactory, $ruleSetDescription)
            );
        }
    }

    public function printArray(array $configuration): string
    {
        if (array_keys($configuration) === array_keys(array_keys($configuration))) {
            return sprintf('[%s]', implode(', ', array_map(function ($value): string {
                return $this->printValue($value);
            }, $configuration)));
        }

        return sprintf('[%s]', implode(', ', array_map(function ($value, $key): string {
            return sprintf(sprintf("'%s' => %%s", $key), $this->printValue($value));
        }, $configuration, array_keys($configuration))));
    }

    /**
     * @param mixed $value
     *
     * @return string|mixed
     */
    public function printValue($value): string
    {
        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        if (is_array($value)) {
            return $this->printArray($value);
        }

        return sprintf("'%s'", $value);
    }
}
