<?php

declare(strict_types=1);

use PHP_CodeSniffer\Config;
use Rector\Core\ValueObject\PhpVersion;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Zing\CodingStandard\Set\PhpCsFixerSetList;

return static function (ECSConfig $ecsConfig): void {
    Config::setConfigData('php_version', PhpVersion::PHP_73);
    $ecsConfig->sets([
        PhpCsFixerSetList::PHP73_MIGRATION,
        PhpCsFixerSetList::PHP71_MIGRATION_RISKY,
    ]);
};
