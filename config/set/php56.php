<?php

declare(strict_types=1);

use PHP_CodeSniffer\Config;
use Rector\Core\ValueObject\PhpVersion;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    Config::setConfigData('php_version', PhpVersion::PHP_56);
    $containerConfigurator->import(\Zing\CodingStandard\Set\PhpCsFixerSetList::PHP54_MIGRATION);
    $containerConfigurator->import(\Zing\CodingStandard\Set\PhpCsFixerSetList::PHP56_MIGRATION_RISKY);
};
