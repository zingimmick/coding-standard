<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->rule(\PhpCsFixer\Fixer\Basic\EncodingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\ModifierKeywordsFixer::class, [
        'elements' => ['method', 'property'],
    ]);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class, [
        'elements' => ['property'],
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\ElseifFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\LanguageConstruct\SingleSpaceAroundConstructFixer::class, [
        'constructs_followed_by_a_single_space' => [
            'abstract',
            'as',
            'case',
            'catch',
            'class',
            'do',
            'else',
            'elseif',
            'final',
            'for',
            'foreach',
            'function',
            'if',
            'interface',
            'namespace',
            'private',
            'protected',
            'public',
            'static',
            'switch',
            'trait',
            'try',
            'use_lambda',
            'while',
        ],
        'constructs_preceded_by_a_single_space' => ['as', 'else', 'elseif', 'use_lambda'],
    ]);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer::class, [
        'closure_fn_spacing' => 'one',
    ]);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class, [
        'after_heredoc' => false,
        'attribute_placement' => 'ignore',
        'on_multiline' => 'ensure_fully_multiline',
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\SpacesInsideParenthesesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\ControlStructureBracesFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Operator\NoSpaceAroundDoubleColonFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\ConstantCaseFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\ControlStructureContinuationPositionFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\LineEndingFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Basic\NoMultipleStatementsPerLineFixer::class);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Basic\BracesPositionFixer::class, [
        'allow_single_line_anonymous_functions' => false,
    ]);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\StatementIndentationFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer::class);
    $ecsConfig->rule(\PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer::class);
};
