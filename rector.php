<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Set\ValueObject\SetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $parameters->set(
        Option::AUTOLOAD_PATHS,
        [
            __DIR__ . '/vendor/squizlabs/php_codesniffer/autoload.php',
        ]
    );

    $parameters->set(
        Option::SETS,
        [
            SetList::ACTION_INJECTION_TO_CONSTRUCTOR_INJECTION,
            SetList::ARRAY_STR_FUNCTIONS_TO_STATIC_CALL,
            SetList::PHPSTAN,
            SetList::PHPUNIT_CODE_QUALITY,
            SetList::SOLID,
            SetList::DOCTRINE_CODE_QUALITY,
            SetList::DEAD_CODE,
            SetList::CODE_QUALITY,
            SetList::PHP_70,
            SetList::PHP_71,
            SetList::PHP_72,
        ]
    );

    $parameters->set(
        Option::PATHS,
        [
            __DIR__ . '/config',
            __DIR__ . '/fixed',
            __DIR__ . '/tests',
            __DIR__ . '/changelog-linker.php',
            __DIR__ . '/ecs.php',
            __DIR__ . '/rector.php',
        ]
    );
};
