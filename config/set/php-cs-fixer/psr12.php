<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class)
        ->call('configure', [
            [
                'order' => ['use_trait'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class)
        ->call('configure', [
            [
                'elements' => ['property'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\SingleTraitInsertPerStatementFixer::class);
    $services->set(\PhpCsFixer\Fixer\Basic\BracesFixer::class)
        ->call('configure', [
            [
                'allow_single_line_anonymous_class_with_empty_body' => true,
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class)
        ->call('configure', [
            [
                'on_multiline' => 'ensure_fully_multiline',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\ConstantCaseFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class);
    $services->set(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\CompactNullableTypehintFixer::class);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer::class);
    $services->set(\PhpCsFixer\Fixer\CastNotation\LowercaseCastFixer::class);
    $services->set(\PhpCsFixer\Fixer\Casing\LowercaseStaticReferenceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\NewWithBracesFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class);
    $services->set(\PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class);
    $services->set(\PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class);
    $services->set(\PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer::class);
    $services->set(\PhpCsFixer\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixer::class);
    $services->set(\PhpCsFixer\Fixer\Import\OrderedImportsFixer::class)
        ->call('configure', [
            [
                'imports_order' => ['class', 'function', 'const'],
                'sort_algorithm' => 'none',
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
