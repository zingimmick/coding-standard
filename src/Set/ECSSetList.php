<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Set;

final class ECSSetList
{
    /**
     * @var string
     */
    public const PHP54_MIGRATION = PhpCsFixerSetList::PHP54_MIGRATION;

    /**
     * @var string
     */
    public const PHP56_MIGRATION_RISKY = PhpCsFixerSetList::PHP56_MIGRATION_RISKY;

    /**
     * @var string
     */
    public const PHP70_MIGRATION = PhpCsFixerSetList::PHP70_MIGRATION;

    /**
     * @var string
     */
    public const PHP70_MIGRATION_RISKY = PhpCsFixerSetList::PHP70_MIGRATION_RISKY;

    /**
     * @var string
     */
    public const PHP71_MIGRATION = PhpCsFixerSetList::PHP71_MIGRATION;

    /**
     * @var string
     */
    public const PHP71_MIGRATION_RISKY = PhpCsFixerSetList::PHP71_MIGRATION_RISKY;

    /**
     * @var string
     */
    public const PHP73_MIGRATION = PhpCsFixerSetList::PHP73_MIGRATION;

    /**
     * @var string
     */
    public const PHP74_MIGRATION = PhpCsFixerSetList::PHP74_MIGRATION;

    /**
     * @var string
     */
    public const PHP74_MIGRATION_RISKY = PhpCsFixerSetList::PHP74_MIGRATION_RISKY;

    /**
     * @var string
     */
    public const PHP80_MIGRATION = PhpCsFixerSetList::PHP80_MIGRATION;

    /**
     * @var string
     */
    public const PHP80_MIGRATION_RISKY = PhpCsFixerSetList::PHP80_MIGRATION_RISKY;

    /**
     * @var string
     */
    public const PHP_CS_FIXER = self::PHP_CS_FIXER_CUSTOM;

    /**
     * @var string
     */
    public const PHP_CODESNIFFER = self::PHP_CODESNIFFER_CUSTOM;

    /**
     * @var string
     */
    public const SLEVOMAT_CODING_STANDARD = self::SLEVOMAT_CODING_STANDARD_CUSTOM;

    /**
     * @var string
     */
    public const PHP_CS_FIXER_CUSTOM = __DIR__ . '/../../config/set/php-cs-fixer-custom.php';

    /**
     * @var string
     */
    public const PHP_CODESNIFFER_CUSTOM = __DIR__ . '/../../config/set/php_codesniffer.php';

    /**
     * @var string
     */
    public const SLEVOMAT_CODING_STANDARD_CUSTOM = __DIR__ . '/../../config/set/slevomat-coding-standard.php';

    /**
     * @var string
     */
    public const CUSTOM = __DIR__ . '/../../config/ecs.php';
}
