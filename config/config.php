<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/set/php-cs-fixer.php');
    $containerConfigurator->import(__DIR__ . '/set/php_codesniffer.php');
    $containerConfigurator->import(__DIR__ . '/set/slevomat-coding-standard.php');
};
