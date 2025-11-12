<?php

declare(strict_types=1);

namespace Zing\CodingStandard;

use PHP_CodeSniffer\Config;
use PHP_CodeSniffer\Exceptions\DeepExitException;
use PHP_CodeSniffer\Util\ExitCode;

class SniffSettingsHelper
{
    public static function setPhpVersion(int $phpVersion): void
    {
        try {
            new Config(['--runtime-set', 'php_version', $phpVersion]);
        } catch (DeepExitException $deepExitException) {
            if ($deepExitException->getCode() !== ExitCode::OKAY) {
                throw $deepExitException;
            }
        }
    }
}
