<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Strings\ConcatenationSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Strings\DoubleQuoteUsageSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Strings\EchoedStringsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Operators\ComparisonOperatorUsageSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Operators\IncrementDecrementUsageSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Operators\ValidLogicalOperatorsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\DisallowMultipleStyleDefinitionsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\LowercaseStyleDefinitionSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ClassDefinitionNameSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\OpacitySniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ClassDefinitionOpeningBraceSpaceSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ColonSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ForbiddenStylesSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\NamedColoursSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ClassDefinitionClosingBraceSpaceSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ColourDefinitionSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\DuplicateClassDefinitionSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\EmptyStyleDefinitionSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\EmptyClassDefinitionSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\MissingColonSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\DuplicateStyleDefinitionSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ShorthandSizeSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\SemicolonSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\IndentationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ValidClassNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\DuplicatePropertySniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\LowercaseClassKeywordsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\SelfMemberReferenceSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ClassFileNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ClassDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Objects\ObjectMemberCommaSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Objects\ObjectInstantiationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Objects\DisallowObjectStringIndexSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\MemberVarScopeSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\MethodScopeSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\StaticThisUsageSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\HeredocSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowMultipleAssignmentsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\InnerFunctionsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\EvalSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\GlobalKeywordSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowBooleanStatementSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DiscouragedFunctionsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\CommentedOutCodeSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\LowercasePHPFunctionsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowSizeFunctionsInLoopsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowInlineIfSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowComparisonAssignmentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\EmbeddedPhpSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\NonExecutableCodeSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\PropertyLabelSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ControlStructureSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\FunctionSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\MemberVarSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\CastSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\FunctionClosingBraceSpaceSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\OperatorSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ObjectOperatorSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LogicalOperatorSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LanguageConstructSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\FunctionOpeningBraceSpaceSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeKeywordSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SemicolonSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Formatting\OperatorBracketSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Arrays\ArrayDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Arrays\ArrayBracketSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Files\FileExtensionSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\GlobalFunctionSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationArgumentSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDuplicateArgumentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\LowercaseFunctionKeywordsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\MultiLineFunctionDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForLoopDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\LowercaseDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ControlSignatureSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\SwitchDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\InlineIfDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForEachLoopDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ElseIfDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\NamingConventions\ValidFunctionNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\NamingConventions\ValidVariableNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\PostStatementCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\VariableCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\ClosingDeclarationCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\DocCommentAlignmentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\LongConditionClosingCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\FunctionCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\InlineCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\ClassCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\FileCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\EmptyCatchCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\FunctionCommentThrowTagSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\BlockCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Debug\JSLintSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Debug\JavaScriptLintSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\EmptyStatementSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Commenting\TodoSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Commenting\DocCommentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\ControlStructures\InlineControlStructureSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\DisallowMultipleStatementsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterCastSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\FunctionCallArgumentSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\ConstructorNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\UpperCaseConstantNameSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DeprecatedFunctionsSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowShortOpenTagSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseKeywordSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseConstantSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Strings\UnnecessaryStringConcatSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\LanguageConstructSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\IncrementDecrementSpacingSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\ScopeIndentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\ControlStructures\MultiLineConditionSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Files\IncludingFileSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Formatting\MultiLineAssignmentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\ValidDefaultValueSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\EndFileNewlineSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Zend\Sniffs\Files\ClosingTagSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Zend\Sniffs\Debug\CodeAnalyzerSniff::class);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff::class, [
        'lineLimit' => '120',
        'absoluteLineLimit' => '0',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff::class, [
        'eolChar' => '\\n',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\MultipleStatementAlignmentSniff::class, [
        'maxPadding' => '20',
        'error' => 'true',
    ]);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff::class, [
        'forbiddenFunctions' => [
            'sizeof' => 'count',
            'delete' => 'unset',
            'print' => 'echo',
            'is_null' => 'null',
            'create_function' => 'null',
        ],
    ]);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Debug\ClosureLinterSniff::class, [
        'errorCodes' => ['0210'],
        'ignoreCodes' => ['0001', '0110', '0240'],
    ]);
    $containerConfigurator->ruleWithConfiguration(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\FunctionCallSignatureSniff::class, [
        'allowMultipleArguments' => 'false',
    ]);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\ArrayIndentSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\MethodDeclarationSniff::class);
    $containerConfigurator->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\PropertyDeclarationSniff::class);
};
