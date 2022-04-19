<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class, [
        'elements' => ['property'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Basic\BracesFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class, [
        'on_multiline' => 'ensure_fully_multiline',
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\ConstantCaseFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Operator\NoSpaceAroundDoubleColonFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class);
    $containerConfigurator->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class, [
        'elements' => ['method', 'property'],
    ]);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class);
    $containerConfigurator->rule(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
