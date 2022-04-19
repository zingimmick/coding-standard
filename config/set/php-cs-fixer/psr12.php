<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class, [
        'order' => ['use_trait'],
    ]);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class, [
        'elements' => ['property'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\NewWithBracesFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class, [
        'inline_constructor_arguments' => false,
        'space_before_parenthesis' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\SingleTraitInsertPerStatementFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Basic\BracesFixer::class, [
        'allow_single_line_anonymous_class_with_empty_body' => true,
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class, [
        'on_multiline' => 'ensure_fully_multiline',
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\ConstantCaseFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\NoSpaceAroundDoubleColonFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\CompactNullableTypehintFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\LowercaseCastFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\LowercaseStaticReferenceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\Import\OrderedImportsFixer::class, [
        'imports_order' => ['class', 'function', 'const'],
        'sort_algorithm' => 'none',
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
