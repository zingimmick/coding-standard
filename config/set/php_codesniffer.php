<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Metrics\NestingLevelSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Metrics\CyclomaticComplexitySniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Strings\UnnecessaryStringConcatSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Classes\DuplicateClassNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\UnusedFunctionParameterSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\UselessOverridingMethodSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\UnnecessaryFinalModifierSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\ForLoopShouldBeWhileLoopSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\JumbledIncrementerSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\AssignmentInConditionSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\EmptyPHPStatementSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\UnconditionalIfStatementSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\ForLoopWithTestFunctionCallSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\EmptyStatementSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff::class)
        ->property('forbiddenFunctions', [
            'sizeof' => 'count',
            'delete' => 'unset',
            'print' => 'echo',
            'is_null' => 'null',
            'create_function' => 'null',
        ]);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\CharacterBeforePHPOpeningTagSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\SyntaxSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseTypeSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowShortOpenTagSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowRequestSuperglobalSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseConstantSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DiscourageGotoSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowAlternativePHPTagsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\SAPIUsageSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\BacktickOperatorSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseKeywordSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\NoSilencedErrorsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DeprecatedFunctionsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\VersionControl\SubversionPropertiesSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\VersionControl\GitMergeConflictSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\ScopeIndentSniff::class)
        ->property('ignoreIndentationTokens', ['T_COMMENT', 'T_DOC_COMMENT_OPEN_TAG']);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\ArbitraryParenthesesSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\IncrementDecrementSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\SpreadOperatorSpacingAfterSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\DisallowMultipleStatementsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterNotSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterCastSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\ArrayIndentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff::class)
        ->property('lineLimit', '120')
        ->property('absoluteLineLimit', '0')
        ->property('ignoreComments', 'true');
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\ByteOrderMarkSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\OneObjectStructurePerFileSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff::class)
        ->property('eolChar', '\\n');
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\OneTraitPerFileSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\OneInterfacePerFileSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\OneClassPerFileSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\ExecutableFileSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\EndFileNewlineSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\FunctionCallArgumentSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\CallTimePassByReferenceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\ControlStructures\InlineControlStructureSniff::class)
        ->property('error', 'true');
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\ControlStructures\DisallowYodaConditionsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\UpperCaseConstantNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Commenting\TodoSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Commenting\FixmeSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Classes\ClassDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ObjectOperatorIndentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\FunctionDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\ValidDefaultValueSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\ControlStructures\ControlSignatureSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\NamingConventions\ValidClassNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\InlineCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\DocCommentAlignmentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR1\Sniffs\Methods\CamelCapsMethodNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR1\Sniffs\Classes\ClassDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR1\Sniffs\Files\SideEffectsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ValidClassNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\FunctionCallSignatureSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\MethodDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\FunctionClosingBraceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\PropertyDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\ClassDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Namespaces\UseDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Namespaces\NamespaceDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\ClosingTagSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\EndFileNewlineSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\SwitchDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\ElseIfDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff::class)
        ->property('ignoreBlankLines', 'true');
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\MethodScopeSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeKeywordSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\LowercaseFunctionKeywordsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationArgumentSpacingSniff::class)
        ->property('equalsSpacing', '1');
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\MultiLineFunctionDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ControlSignatureSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForEachLoopDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForLoopDeclarationSniff::class)
        ->property('ignoreNewlines', 'true');
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\LowercaseDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Classes\OpeningBraceSpaceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Classes\ClosingBraceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Classes\ClassInstantiationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Namespaces\CompoundNamespaceDepthSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Properties\ConstantVisibilitySniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Files\ImportStatementSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Files\OpenTagSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Files\DeclareStatementSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Functions\NullableTypeDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Functions\ReturnTypeDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\ControlStructures\ControlStructureSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\ControlStructures\BooleanOperatorPlacementSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Keywords\ShortFormTypeKeywordsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\CastSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Strings\EchoedStringsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Operators\IncrementDecrementUsageSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Operators\ValidLogicalOperatorsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\LowercaseClassKeywordsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\SelfMemberReferenceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ClassFileNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ClassDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\MemberVarScopeSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\StaticThisUsageSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\InnerFunctionsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\EvalSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\GlobalKeywordSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DiscouragedFunctionsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\CommentedOutCodeSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\LowercasePHPFunctionsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\DisallowSizeFunctionsInLoopsSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\EmbeddedPhpSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\NonExecutableCodeSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LogicalOperatorSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LanguageConstructSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\FunctionOpeningBraceSpaceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SemicolonSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Arrays\ArrayBracketSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\GlobalFunctionSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDuplicateArgumentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\PostStatementCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\LongConditionClosingCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\EmptyCatchCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Zend\Sniffs\Files\ClosingTagSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Zend\Sniffs\Debug\CodeAnalyzerSniff::class);
};
