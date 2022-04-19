<?php

declare(strict_types=1);

return static function (Symplify\EasyCodingStandard\Config\ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Zend\Sniffs\Files\ClosingTagSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Zend\Sniffs\NamingConventions\ValidVariableNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Zend\Sniffs\Debug\CodeAnalyzerSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\FunctionCallArgumentSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\OpeningFunctionBraceBsdAllmanSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowShortOpenTagSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Classes\ClassDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\ControlStructures\ControlSignatureSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\FunctionCallSignatureSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\ValidDefaultValueSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\GlobalFunctionSniff::class);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff::class, [
        'lineLimit' => '80',
        'absoluteLineLimit' => '120',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff::class, [
        'eolChar' => '\\n',
    ]);
};
