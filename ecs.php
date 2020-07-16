<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symplify\EasyCodingStandard\Configuration\Option;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/config/config.php');
    $services = $containerConfigurator->services();
    $services->defaults()
        ->public()
        ->autowire()
        ->autoconfigure();
    $parameters = $containerConfigurator->parameters();

    $parameters->set(Option::SETS, ['psr12', 'php70', 'php71', 'dead-code', 'clean-code', 'common']);

    $parameters->set(
        Option::PATHS,
        [
            __DIR__ . '/config',
            __DIR__ . '/fixed',
            __DIR__ . '/tests',
            __DIR__ . '/ecs.php',
        ]
    );

    $parameters->set(
        Option::EXCLUDE_PATHS,
        [
            '*/correct/*.php',
            '*/correct/*.php',
        ]
    );
};
