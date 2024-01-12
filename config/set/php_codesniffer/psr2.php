<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\FunctionCallSignatureSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\MethodDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\FunctionClosingBraceSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\PropertyDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\ClassDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Namespaces\UseDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Namespaces\NamespaceDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\ClosingTagSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\EndFileNewlineSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\ControlStructureSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\SwitchDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\ElseIfDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR1\Sniffs\Methods\CamelCapsMethodNameSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR1\Sniffs\Classes\ClassDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR1\Sniffs\Files\SideEffectsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowAlternativePHPTagsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowShortOpenTagSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\ByteOrderMarkSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ValidClassNameSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\UpperCaseConstantNameSniff::class);
    $ecsConfig->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff::class, [
        'eolChar' => '\n',
    ]);
    $ecsConfig->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff::class, [
        'lineLimit' => '120',
        'absoluteLineLimit' => '0',
    ]);
    $ecsConfig->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff::class, [
        'ignoreBlankLines' => 'true',
    ]);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\DisallowMultipleStatementsSniff::class);
    $ecsConfig->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\ScopeIndentSniff::class, [
        'ignoreIndentationTokens' => ['T_COMMENT', 'T_DOC_COMMENT_OPEN_TAG'],
    ]);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseKeywordSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseConstantSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\MethodScopeSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeKeywordSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\LowercaseFunctionKeywordsSniff::class);
    $ecsConfig->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationArgumentSpacingSniff::class, [
        'equalsSpacing' => '1',
    ]);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\ValidDefaultValueSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\MultiLineFunctionDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\FunctionCallArgumentSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ControlSignatureSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ControlStructureSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForEachLoopDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForLoopDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\LowercaseDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\ControlStructures\InlineControlStructureSniff::class);
};
