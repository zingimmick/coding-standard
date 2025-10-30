<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Set;

final class PhpCsFixerSetList
{
    public const DOCTRINE_ANNOTATION = __DIR__ . '/../../config/set/php-cs-fixer/doctrine-annotation.php';

    public const PHP54_MIGRATION = __DIR__ . '/../../config/set/php-cs-fixer/php5x4-migration.php';

    public const PHP56_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/php5x6-migration-risky.php';

    public const PHP70_MIGRATION = __DIR__ . '/../../config/set/php-cs-fixer/php7x0-migration.php';

    public const PHP70_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/php7x0-migration-risky.php';

    public const PHP71_MIGRATION = __DIR__ . '/../../config/set/php-cs-fixer/php7x1-migration.php';

    public const PHP71_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/php7x1-migration-risky.php';

    public const PHP73_MIGRATION = __DIR__ . '/../../config/set/php-cs-fixer/php7x3-migration.php';

    public const PHP74_MIGRATION = __DIR__ . '/../../config/set/php-cs-fixer/php7x4-migration.php';

    public const PHP74_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/php7x4-migration-risky.php';

    public const PHP80_MIGRATION = __DIR__ . '/../../config/set/php-cs-fixer/php8x0-migration.php';

    public const PHP80_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/php8x0-migration-risky.php';

    public const PHP81_MIGRATION = __DIR__ . '/../../config/set/php-cs-fixer/php8x1-migration.php';

    public const PHP82_MIGRATION = __DIR__ . '/../../config/set/php-cs-fixer/php8x2-migration.php';

    public const PHP82_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/php8x2-migration-risky.php';

    public const PHP83_MIGRATION = __DIR__ . '/../../config/set/php-cs-fixer/php8x3-migration.php';

    public const PHP84_MIGRATION = __DIR__ . '/../../config/set/php-cs-fixer/php8x4-migration.php';

    public const PHP85_MIGRATION = __DIR__ . '/../../config/set/php-cs-fixer/php8x5-migration.php';

    /**
     * @deprecated Use \Zing\CodingStandard\Set\PhpCsFixerSetList::PER_CS instead
     */
    public const PER = self::PER_CS;

    /**
     * @deprecated Use \Zing\CodingStandard\Set\PhpCsFixerSetList::PER_CS_RISKY instead
     */
    public const PER_RISKY = self::PER_CS_RISKY;

    public const PER_CS = __DIR__ . '/../../config/set/php-cs-fixer/per-cs.php';

    public const PER_CS_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/per-cs-risky.php';

    public const PER_CS10 = __DIR__ . '/../../config/set/php-cs-fixer/per-cs1x0.php';

    public const PER_CS10_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/per-cs1x0-risky.php';

    public const PER_CS20 = __DIR__ . '/../../config/set/php-cs-fixer/per-cs2x0.php';

    public const PER_CS20_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/per-cs2x0-risky.php';

    public const PER_CS30 = __DIR__ . '/../../config/set/php-cs-fixer/per-cs3x0.php';

    public const PER_CS30_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/per-cs3x0-risky.php';

    public const PHP_CS_FIXER = __DIR__ . '/../../config/set/php-cs-fixer/php-cs-fixer.php';

    public const PHP_CS_FIXER_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/php-cs-fixer-risky.php';

    public const PHPUNIT30_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit3x0-migration-risky.php';

    public const PHPUNIT32_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit3x2-migration-risky.php';

    public const PHPUNIT35_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit3x5-migration-risky.php';

    public const PHPUNIT43_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit4x3-migration-risky.php';

    public const PHPUNIT48_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit4x8-migration-risky.php';

    public const PHPUNIT50_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit5x0-migration-risky.php';

    public const PHPUNIT52_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit5x2-migration-risky.php';

    public const PHPUNIT54_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit5x4-migration-risky.php';

    public const PHPUNIT55_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit5x5-migration-risky.php';

    public const PHPUNIT56_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit5x6-migration-risky.php';

    public const PHPUNIT57_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit5x7-migration-risky.php';

    public const PHPUNIT60_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit6x0-migration-risky.php';

    public const PHPUNIT75_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit7x5-migration-risky.php';

    public const PHPUNIT84_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit8x4-migration-risky.php';

    public const PHPUNIT100_MIGRATION_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/phpunit10x0-migration-risky.php';

    public const PSR1 = __DIR__ . '/../../config/set/php-cs-fixer/psr1.php';

    public const PSR2 = __DIR__ . '/../../config/set/php-cs-fixer/psr2.php';

    public const PSR12 = __DIR__ . '/../../config/set/php-cs-fixer/psr12.php';

    public const PSR12_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/psr12-risky.php';

    public const SYMFONY = __DIR__ . '/../../config/set/php-cs-fixer/symfony.php';

    public const SYMFONY_RISKY = __DIR__ . '/../../config/set/php-cs-fixer/symfony-risky.php';
}
