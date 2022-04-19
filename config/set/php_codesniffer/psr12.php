<?php

declare(strict_types=1);

return static function (Symplify\EasyCodingStandard\Config\ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Operators\OperatorSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Traits\UseDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Classes\OpeningBraceSpaceSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Classes\ClosingBraceSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Classes\AnonClassDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Classes\ClassInstantiationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Namespaces\CompoundNamespaceDepthSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Properties\ConstantVisibilitySniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Files\ImportStatementSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Files\FileHeaderSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Files\OpenTagSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Files\DeclareStatementSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Functions\NullableTypeDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Functions\ReturnTypeDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\ControlStructures\ControlStructureSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\ControlStructures\BooleanOperatorPlacementSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Keywords\ShortFormTypeKeywordsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR1\Sniffs\Methods\CamelCapsMethodNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR1\Sniffs\Classes\ClassDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR1\Sniffs\Files\SideEffectsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowAlternativePHPTagsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowShortOpenTagSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\ByteOrderMarkSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ValidClassNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\UpperCaseConstantNameSniff::class);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff::class, [
        'eolChar' => '\\n',
    ]);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\EndFileNewlineSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\ClosingTagSniff::class);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff::class, [
        'lineLimit' => '120',
        'absoluteLineLimit' => '0',
    ]);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\DisallowMultipleStatementsSniff::class);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\ScopeIndentSniff::class, [
        'ignoreIndentationTokens' => ['T_COMMENT', 'T_DOC_COMMENT_OPEN_TAG'],
    ]);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseKeywordSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseConstantSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseTypeSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\ClassDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\PropertyDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\MethodScopeSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeKeywordSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\MethodDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\FunctionClosingBraceSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\LowercaseFunctionKeywordsSniff::class);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationArgumentSpacingSniff::class, [
        'equalsSpacing' => '1',
    ]);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\ValidDefaultValueSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\MultiLineFunctionDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\FunctionCallArgumentSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\FunctionCallSignatureSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ControlSignatureSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ControlStructureSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForEachLoopDeclarationSniff::class);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForLoopDeclarationSniff::class, [
        'ignoreNewlines' => 'true',
    ]);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\LowercaseDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\ControlStructures\InlineControlStructureSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\ElseIfDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\SwitchDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\IncrementDecrementSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\CastSpacingSniff::class);
};
