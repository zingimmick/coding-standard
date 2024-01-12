<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\Strings\JoinStringsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\CSS\BrowserSpecificStylesSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\Objects\CreateWidgetTypeCallbackSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\Objects\AssignThisSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\Objects\DisallowNewWidgetSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\PHP\EvalObjectFactorySniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\PHP\AjaxNullComparisonSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\PHP\GetRequestDataSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\PHP\ReturnFunctionValueSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\Commenting\FunctionCommentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\Debug\FirebugConsoleSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\Debug\DebugCodeSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\Channels\DisallowSelfActionsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\Channels\IncludeSystemSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\Channels\IncludeOwnSystemSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\MySource\Sniffs\Channels\UnusedSystemSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Strings\ConcatenationSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Strings\DoubleQuoteUsageSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Strings\EchoedStringsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Operators\ComparisonOperatorUsageSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Operators\IncrementDecrementUsageSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Operators\ValidLogicalOperatorsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\DisallowMultipleStyleDefinitionsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\LowercaseStyleDefinitionSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ClassDefinitionNameSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\OpacitySniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ClassDefinitionOpeningBraceSpaceSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ColonSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ForbiddenStylesSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\NamedColoursSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ClassDefinitionClosingBraceSpaceSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ColourDefinitionSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\DuplicateClassDefinitionSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\EmptyStyleDefinitionSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\EmptyClassDefinitionSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\MissingColonSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\DuplicateStyleDefinitionSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ShorthandSizeSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\SemicolonSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\IndentationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ValidClassNameSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\DuplicatePropertySniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\LowercaseClassKeywordsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\SelfMemberReferenceSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ClassFileNameSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ClassDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Objects\ObjectMemberCommaSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Objects\ObjectInstantiationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Objects\DisallowObjectStringIndexSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\MemberVarScopeSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\MethodScopeSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\StaticThisUsageSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\HeredocSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowMultipleAssignmentsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\InnerFunctionsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\EvalSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\GlobalKeywordSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowBooleanStatementSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DiscouragedFunctionsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\CommentedOutCodeSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\LowercasePHPFunctionsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowSizeFunctionsInLoopsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowInlineIfSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowComparisonAssignmentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\EmbeddedPhpSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\NonExecutableCodeSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\PropertyLabelSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ControlStructureSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\FunctionSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\MemberVarSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\CastSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\FunctionClosingBraceSpaceSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\OperatorSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ObjectOperatorSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LogicalOperatorSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LanguageConstructSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\FunctionOpeningBraceSpaceSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeKeywordSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SemicolonSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Formatting\OperatorBracketSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Arrays\ArrayDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Arrays\ArrayBracketSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Files\FileExtensionSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\GlobalFunctionSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationArgumentSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDuplicateArgumentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\LowercaseFunctionKeywordsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\MultiLineFunctionDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForLoopDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\LowercaseDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ControlSignatureSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\SwitchDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\InlineIfDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForEachLoopDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ElseIfDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\NamingConventions\ValidFunctionNameSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\NamingConventions\ValidVariableNameSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\PostStatementCommentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\VariableCommentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\ClosingDeclarationCommentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\DocCommentAlignmentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\LongConditionClosingCommentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\InlineCommentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\ClassCommentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\FileCommentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\EmptyCatchCommentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\FunctionCommentThrowTagSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\BlockCommentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Debug\JSLintSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Debug\JavaScriptLintSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\EmptyStatementSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Commenting\TodoSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Commenting\DocCommentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\ControlStructures\InlineControlStructureSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\DisallowMultipleStatementsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterCastSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\FunctionCallArgumentSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\ConstructorNameSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\UpperCaseConstantNameSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DeprecatedFunctionsSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowShortOpenTagSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseKeywordSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseConstantSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Strings\UnnecessaryStringConcatSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\LanguageConstructSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\IncrementDecrementSpacingSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\ScopeIndentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\ControlStructures\MultiLineConditionSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Files\IncludingFileSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Formatting\MultiLineAssignmentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\ValidDefaultValueSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\EndFileNewlineSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Zend\Sniffs\Files\ClosingTagSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Zend\Sniffs\Debug\CodeAnalyzerSniff::class);
    $ecsConfig->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff::class, [
        'lineLimit' => '120',
        'absoluteLineLimit' => '0',
    ]);
    $ecsConfig->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff::class, [
        'eolChar' => '\n',
    ]);
    $ecsConfig->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\MultipleStatementAlignmentSniff::class, [
        'maxPadding' => '20',
        'error' => 'true',
    ]);
    $ecsConfig->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff::class, [
        'forbiddenFunctions' => [
            'sizeof' => 'count',
            'delete' => 'unset',
            'print' => 'echo',
            'is_null' => 'null',
            'create_function' => 'null',
        ],
    ]);
    $ecsConfig->ruleWithConfiguration(\PHP_CodeSniffer\Standards\Generic\Sniffs\Debug\ClosureLinterSniff::class, [
        'errorCodes' => ['0210'],
        'ignoreCodes' => ['0001', '0110', '0240'],
    ]);
    $ecsConfig->ruleWithConfiguration(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\FunctionCallSignatureSniff::class, [
        'allowMultipleArguments' => 'false',
    ]);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\ArrayIndentSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\MethodDeclarationSniff::class);
    $ecsConfig->rule(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\PropertyDeclarationSniff::class);
};
