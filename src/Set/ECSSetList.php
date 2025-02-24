<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Set;

final class ECSSetList
{
    public const PHP54_MIGRATION = PhpCsFixerSetList::PHP54_MIGRATION;

    public const PHP56_MIGRATION_RISKY = PhpCsFixerSetList::PHP56_MIGRATION_RISKY;

    public const PHP70_MIGRATION = PhpCsFixerSetList::PHP70_MIGRATION;

    public const PHP70_MIGRATION_RISKY = PhpCsFixerSetList::PHP70_MIGRATION_RISKY;

    public const PHP71_MIGRATION = PhpCsFixerSetList::PHP71_MIGRATION;

    public const PHP71_MIGRATION_RISKY = PhpCsFixerSetList::PHP71_MIGRATION_RISKY;

    public const PHP73_MIGRATION = PhpCsFixerSetList::PHP73_MIGRATION;

    public const PHP74_MIGRATION = PhpCsFixerSetList::PHP74_MIGRATION;

    public const PHP74_MIGRATION_RISKY = PhpCsFixerSetList::PHP74_MIGRATION_RISKY;

    public const PHP80_MIGRATION = PhpCsFixerSetList::PHP80_MIGRATION;

    public const PHP80_MIGRATION_RISKY = PhpCsFixerSetList::PHP80_MIGRATION_RISKY;

    public const PHP_CS_FIXER = self::PHP_CS_FIXER_CUSTOM;

    public const PHP_CODESNIFFER = self::PHP_CODESNIFFER_CUSTOM;

    public const SLEVOMAT_CODING_STANDARD = self::SLEVOMAT_CODING_STANDARD_CUSTOM;

    public const PHP_CS_FIXER_CUSTOM = __DIR__ . '/../../config/set/php-cs-fixer-custom.php';

    public const PHP_CODESNIFFER_CUSTOM = __DIR__ . '/../../config/set/php_codesniffer.php';

    public const SLEVOMAT_CODING_STANDARD_CUSTOM = __DIR__ . '/../../config/set/slevomat-coding-standard.php';

    public const CUSTOM = __DIR__ . '/../../config/ecs.php';

    public const PHP_54 = __DIR__ . '/../../config/set/php54.php';

    public const PHP_55 = __DIR__ . '/../../config/set/php55.php';

    public const PHP_56 = __DIR__ . '/../../config/set/php56.php';

    public const PHP_70 = __DIR__ . '/../../config/set/php70.php';

    public const PHP_71 = __DIR__ . '/../../config/set/php71.php';

    public const PHP_72 = __DIR__ . '/../../config/set/php72.php';

    public const PHP_73 = __DIR__ . '/../../config/set/php73.php';

    public const PHP_74 = __DIR__ . '/../../config/set/php74.php';

    public const PHP_80 = __DIR__ . '/../../config/set/php80.php';

    public const PHP_81 = __DIR__ . '/../../config/set/php81.php';

    public const PHP_82 = __DIR__ . '/../../config/set/php82.php';

    public const PHP_83 = __DIR__ . '/../../config/set/php83.php';

    public const PHP_84 = __DIR__ . '/../../config/set/php84.php';
}
