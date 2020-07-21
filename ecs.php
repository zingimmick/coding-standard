<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\Configuration\Option;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__.'/config/config.php');
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::SETS, [
        'psr12',
        'php70',
        'php71',
        'dead-code',
        'clean-code',
        'common',
    ]);
    $parameters->set(Option::PATHS, [
        'config',
        'fixed',
        'tests',
    ]);
    $parameters->set(Option::EXCLUDE_PATHS, [
        'correct/*.php',
        'wrong/*.php',
    ]);
    $parameters->set(
        Option::SKIP,
        [
            PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer::class => null,
        ]
    );
};