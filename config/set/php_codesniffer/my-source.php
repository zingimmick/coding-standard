<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\Strings\JoinStringsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\CSS\BrowserSpecificStylesSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\Objects\CreateWidgetTypeCallbackSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\Objects\AssignThisSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\Objects\DisallowNewWidgetSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\PHP\EvalObjectFactorySniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\PHP\AjaxNullComparisonSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\PHP\GetRequestDataSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\PHP\ReturnFunctionValueSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\Commenting\FunctionCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\Debug\FirebugConsoleSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\Debug\DebugCodeSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\Channels\DisallowSelfActionsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\Channels\IncludeSystemSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\Channels\IncludeOwnSystemSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\MySource\Sniffs\Channels\UnusedSystemSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Strings\ConcatenationSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Strings\DoubleQuoteUsageSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Strings\EchoedStringsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Operators\ComparisonOperatorUsageSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Operators\IncrementDecrementUsageSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Operators\ValidLogicalOperatorsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\DisallowMultipleStyleDefinitionsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\LowercaseStyleDefinitionSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ClassDefinitionNameSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\OpacitySniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ClassDefinitionOpeningBraceSpaceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ColonSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ForbiddenStylesSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\NamedColoursSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ClassDefinitionClosingBraceSpaceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ColourDefinitionSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\DuplicateClassDefinitionSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\EmptyStyleDefinitionSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\EmptyClassDefinitionSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\MissingColonSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\DuplicateStyleDefinitionSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\ShorthandSizeSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\SemicolonSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS\IndentationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ValidClassNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\DuplicatePropertySniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\LowercaseClassKeywordsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\SelfMemberReferenceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ClassFileNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ClassDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Objects\ObjectMemberCommaSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Objects\ObjectInstantiationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Objects\DisallowObjectStringIndexSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\MemberVarScopeSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\MethodScopeSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\StaticThisUsageSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\HeredocSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowMultipleAssignmentsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\InnerFunctionsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\EvalSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\GlobalKeywordSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowBooleanStatementSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DiscouragedFunctionsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\CommentedOutCodeSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\LowercasePHPFunctionsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowSizeFunctionsInLoopsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowInlineIfSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowComparisonAssignmentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\EmbeddedPhpSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\NonExecutableCodeSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\PropertyLabelSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ControlStructureSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\FunctionSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\MemberVarSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\CastSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\FunctionClosingBraceSpaceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\OperatorSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ObjectOperatorSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LogicalOperatorSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LanguageConstructSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\FunctionOpeningBraceSpaceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeKeywordSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SemicolonSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Formatting\OperatorBracketSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Arrays\ArrayDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Arrays\ArrayBracketSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Files\FileExtensionSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\GlobalFunctionSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationArgumentSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDuplicateArgumentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\LowercaseFunctionKeywordsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\MultiLineFunctionDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForLoopDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\LowercaseDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ControlSignatureSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\SwitchDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\InlineIfDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForEachLoopDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ElseIfDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\NamingConventions\ValidFunctionNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\NamingConventions\ValidVariableNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\PostStatementCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\VariableCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\ClosingDeclarationCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\DocCommentAlignmentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\LongConditionClosingCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\InlineCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\ClassCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\FileCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\EmptyCatchCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\FunctionCommentThrowTagSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\BlockCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Debug\JSLintSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Debug\JavaScriptLintSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\EmptyStatementSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Commenting\TodoSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Commenting\DocCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\ControlStructures\InlineControlStructureSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\DisallowMultipleStatementsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterCastSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\FunctionCallArgumentSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\ConstructorNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\UpperCaseConstantNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DeprecatedFunctionsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowShortOpenTagSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseKeywordSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseConstantSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Strings\UnnecessaryStringConcatSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\LanguageConstructSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\IncrementDecrementSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\ScopeIndentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\ControlStructures\MultiLineConditionSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Files\IncludingFileSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Formatting\MultiLineAssignmentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\ValidDefaultValueSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\EndFileNewlineSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Zend\Sniffs\Files\ClosingTagSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Zend\Sniffs\Debug\CodeAnalyzerSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff::class)
        ->property('lineLimit', '120')
        ->property('absoluteLineLimit', '0');
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff::class)
        ->property('eolChar', '\\n');
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\MultipleStatementAlignmentSniff::class)
        ->property('maxPadding', '20')
        ->property('error', 'true');
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff::class)
        ->property('forbiddenFunctions', [
            'sizeof' => 'count',
            'delete' => 'unset',
            'print' => 'echo',
            'is_null' => 'null',
            'create_function' => 'null',
        ]);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Debug\ClosureLinterSniff::class)
        ->property('errorCodes', ['0210'])
        ->property('ignoreCodes', ['0001', '0110', '0240']);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\FunctionCallSignatureSniff::class)
        ->property('allowMultipleArguments', 'false');
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\ArrayIndentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\MethodDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\PropertyDeclarationSniff::class);
};
