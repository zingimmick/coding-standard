<?php

declare(strict_types=1);

return static function (Symplify\EasyCodingStandard\Config\ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Classes\ClassDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ScopeIndentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ObjectOperatorIndentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Formatting\MultiLineAssignmentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Files\IncludingFileSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\FunctionCallSignatureSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\FunctionDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\ValidDefaultValueSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\ControlStructures\ControlSignatureSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\ControlStructures\MultiLineConditionSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\NamingConventions\ValidClassNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\NamingConventions\ValidFunctionNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\NamingConventions\ValidVariableNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\FunctionCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\InlineCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\ClassCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\FileCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\FunctionCallArgumentSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\UpperCaseConstantNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseConstantSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowShortOpenTagSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Commenting\DocCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\DocCommentAlignmentSniff::class);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff::class, [
        'lineLimit' => '85',
        'absoluteLineLimit' => '0',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff::class, [
        'eolChar' => '\\n',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\ControlStructures\InlineControlStructureSniff::class, [
        'error' => 'false',
    ]);
};
