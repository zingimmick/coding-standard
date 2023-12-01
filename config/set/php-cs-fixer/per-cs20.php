<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->rule(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class, [
        'order' => ['use_trait'],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class, [
        'elements' => ['property'],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\NewWithParenthesesFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class, [
        'inline_constructor_arguments' => false,
        'space_before_parenthesis' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\SingleTraitInsertPerStatementFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class, [
        'closure_fn_spacing' => 'none',
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\SpacesInsideParenthesesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class, [
        'group_to_single_imports' => false,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\ControlStructureBracesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\CompactNullableTypeDeclarationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\LowercaseCastFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\LowercaseStaticReferenceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\ConstantCaseFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\ControlStructureContinuationPositionFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\NoSpaceAroundDoubleColonFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Operator\ConcatSpaceFixer::class, [
        'spacing' => 'one',
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Basic\NoMultipleStatementsPerLineFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Basic\BracesPositionFixer::class, [
        'allow_single_line_empty_anonymous_classes' => true,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\StatementIndentationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Basic\SingleLineEmptyBodyFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Import\OrderedImportsFixer::class, [
        'imports_order' => ['class', 'function', 'const'],
        'sort_algorithm' => 'none',
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\NamespaceNotation\BlankLinesBeforeNamespaceFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer::class, [
        'default' => 'at_least_single_space',
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\BlankLineBetweenImportGroupsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
