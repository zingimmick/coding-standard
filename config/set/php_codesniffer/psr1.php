<?php

declare(strict_types=1);

return static function (Symplify\EasyCodingStandard\Config\ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR1\Sniffs\Methods\CamelCapsMethodNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR1\Sniffs\Classes\ClassDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR1\Sniffs\Files\SideEffectsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowAlternativePHPTagsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowShortOpenTagSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\ByteOrderMarkSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ValidClassNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\UpperCaseConstantNameSniff::class);
};
