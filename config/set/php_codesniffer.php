<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\ArrayIndentSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\EmptyPHPStatementSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\EmptyStatementSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\ForLoopShouldBeWhileLoopSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\ForLoopWithTestFunctionCallSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\JumbledIncrementerSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\UnconditionalIfStatementSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\UnnecessaryFinalModifierSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\UnusedFunctionParameterSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\UselessOverridingMethodSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Commenting\FixmeSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Commenting\TodoSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\ControlStructures\InlineControlStructureSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\ByteOrderMarkSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\OneClassPerFileSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\OneInterfacePerFileSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Files\OneTraitPerFileSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\DisallowMultipleStatementsSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterCastSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Formatting\SpaceAfterNotSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\CallTimePassByReferenceSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\FunctionCallArgumentSpacingSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\UpperCaseConstantNameSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\BacktickOperatorSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\CharacterBeforePHPOpeningTagSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DeprecatedFunctionsSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowAlternativePHPTagsSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowShortOpenTagSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DiscourageGotoSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseConstantSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseKeywordSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseTypeSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\NoSilencedErrorsSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\SAPIUsageSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\SyntaxSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\Strings\UnnecessaryStringConcatSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\VersionControl\GitMergeConflictSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\ArbitraryParenthesesSpacingSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\IncrementDecrementSpacingSniff;
use PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\ScopeIndentSniff;
use PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\FunctionCallSignatureSniff;
use PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\ValidDefaultValueSniff;
use PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ObjectOperatorIndentSniff;
use PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ScopeClosingBraceSniff;
use PHP_CodeSniffer\Standards\PSR1\Sniffs\Files\SideEffectsSniff;
use PHP_CodeSniffer\Standards\PSR1\Sniffs\Methods\CamelCapsMethodNameSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\Classes\AnonClassDeclarationSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\Classes\ClassInstantiationSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\Classes\ClosingBraceSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\ControlStructures\BooleanOperatorPlacementSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\Files\DeclareStatementSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\Files\FileHeaderSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\Files\ImportStatementSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\Files\OpenTagSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\Functions\ReturnTypeDeclarationSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\Keywords\ShortFormTypeKeywordsSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\Namespaces\CompoundNamespaceDepthSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\Operators\OperatorSpacingSniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\Properties\ConstantVisibilitySniff;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\Traits\UseDeclarationSniff;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\ClassDeclarationSniff;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\Classes\PropertyDeclarationSniff;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\ElseIfDeclarationSniff;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\ControlStructures\SwitchDeclarationSniff;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\EndFileNewlineSniff;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\FunctionClosingBraceSniff;
use PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\MethodDeclarationSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Arrays\ArrayBracketSpacingSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Arrays\ArrayDeclarationSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Classes\ValidClassNameSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\DocCommentAlignmentSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\EmptyCatchCommentSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\LongConditionClosingCommentSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\PostStatementCommentSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ControlSignatureSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForEachLoopDeclarationSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\ForLoopDeclarationSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\ControlStructures\LowercaseDeclarationSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationArgumentSpacingSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\FunctionDeclarationSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\LowercaseFunctionKeywordsSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\MultiLineFunctionDeclarationSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\EvalSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\PHP\GlobalKeywordSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Scope\MethodScopeSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\CastSpacingSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ControlStructureSpacingSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\LanguageConstructSpacingSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeKeywordSpacingSniff;
use PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\SuperfluousWhitespaceSniff;
use PHP_CodeSniffer\Standards\Zend\Sniffs\Debug\CodeAnalyzerSniff;
use PHP_CodeSniffer\Standards\Zend\Sniffs\Files\ClosingTagSniff;
use Symplify\EasyCodingStandard\Configuration\Option;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(OperatorSpacingSniff::class);
    $services->set(UseDeclarationSniff::class);
    $services->set(ClosingBraceSniff::class);
    $services->set(AnonClassDeclarationSniff::class);
    $services->set(ClassInstantiationSniff::class);
    $services->set(CompoundNamespaceDepthSniff::class);
    $services->set(ConstantVisibilitySniff::class);
    $services->set(ImportStatementSniff::class);
    $services->set(FileHeaderSniff::class);
    $services->set(OpenTagSniff::class);
    $services->set(DeclareStatementSniff::class);
    //  报错
    //$services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\Functions\NullableTypeDeclarationSniff::class);
    $services->set(ReturnTypeDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR12\Sniffs\ControlStructures\ControlStructureSpacingSniff::class);
    $services->set(BooleanOperatorPlacementSniff::class);
    $services->set(ShortFormTypeKeywordsSniff::class);
    $services->set(CamelCapsMethodNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR1\Sniffs\Classes\ClassDeclarationSniff::class);
    $services->set(SideEffectsSniff::class);
    $services->set(DisallowAlternativePHPTagsSniff::class);
    $services->set(DisallowShortOpenTagSniff::class);
    $services->set(ByteOrderMarkSniff::class);
    $services->set(ValidClassNameSniff::class);
    $services->set(UpperCaseConstantNameSniff::class);
    $services->set(LineEndingsSniff::class)
        ->property('eolChar', '\n');
    $services->set(EndFileNewlineSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Files\ClosingTagSniff::class);
    $services->set(LineLengthSniff::class)
        ->property('lineLimit', '120')
        ->property('absoluteLineLimit', '0');
    $services->set(SuperfluousWhitespaceSniff::class)
        ->property('ignoreBlankLines', 'true');
    $services->set(DisallowMultipleStatementsSniff::class);
    $services->set(ScopeIndentSniff::class)
        ->property(
            'ignoreIndentationTokens',
            [
                'T_COMMENT',
                'T_DOC_COMMENT_OPEN_TAG',
            ]
        );
    $services->set(DisallowTabIndentSniff::class);
    $services->set(LowerCaseKeywordSniff::class);
    $services->set(LowerCaseConstantSniff::class);
    $services->set(LowerCaseTypeSniff::class);
    $services->set(ClassDeclarationSniff::class);
    $services->set(PropertyDeclarationSniff::class);
    $services->set(MethodScopeSniff::class);
    $services->set(ScopeKeywordSpacingSniff::class);
    $services->set(MethodDeclarationSniff::class);
    $services->set(FunctionClosingBraceSniff::class);
    $services->set(FunctionDeclarationSniff::class);
    $services->set(LowercaseFunctionKeywordsSniff::class);
    $services->set(FunctionDeclarationArgumentSpacingSniff::class)
        ->property('equalsSpacing', '1');
    $services->set(ValidDefaultValueSniff::class);
    $services->set(MultiLineFunctionDeclarationSniff::class);
    $services->set(FunctionCallArgumentSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PSR2\Sniffs\Methods\FunctionCallSignatureSniff::class);
    $services->set(ControlSignatureSniff::class);
    $services->set(ControlStructureSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class);
    $services->set(ForEachLoopDeclarationSniff::class);
    $services->set(ForLoopDeclarationSniff::class)
        ->property('ignoreNewlines', 'true');
    $services->set(LowercaseDeclarationSniff::class);
    $services->set(InlineControlStructureSniff::class)
        ->property('error', 'true');
    $services->set(ElseIfDeclarationSniff::class);
    $services->set(SwitchDeclarationSniff::class);
    $services->set(IncrementDecrementSpacingSniff::class);
    $services->set(CastSpacingSniff::class);
    $services->set(ArrayBracketSpacingSniff::class);
    $services->set(ArrayDeclarationSniff::class);
    $services->set(DocCommentAlignmentSniff::class);
    $services->set(EmptyCatchCommentSniff::class);
    $services->set(LongConditionClosingCommentSniff::class);
    $services->set(PostStatementCommentSniff::class);
    $services->set(TodoSniff::class);
    $services->set(ClosingTagSniff::class);
    $services->set(FunctionCallSignatureSniff::class);
    $services->set(DisallowLongArraySyntaxSniff::class);
    $services->set(SpaceAfterCastSniff::class);
    $services->set(SpaceAfterNotSniff::class);
    $services->set(BacktickOperatorSniff::class);
    $services->set(CharacterBeforePHPOpeningTagSniff::class);
    $services->set(ForbiddenFunctionsSniff::class);
    $services->set(SAPIUsageSniff::class);
    $services->set(SyntaxSniff::class);
    $services->set(GitMergeConflictSniff::class);
    $services->set(ArbitraryParenthesesSpacingSniff::class);
    $services->set(ObjectOperatorIndentSniff::class);
    $services->set(ScopeClosingBraceSniff::class);
    $services->set(LanguageConstructSpacingSniff::class);
    $services->set(UnnecessaryFinalModifierSniff::class);
    $services->set(ArrayIndentSniff::class);
    $services->set(EmptyPHPStatementSniff::class);
    $services->set(EmptyStatementSniff::class);
    $services->set(ForLoopShouldBeWhileLoopSniff::class);
    $services->set(ForLoopWithTestFunctionCallSniff::class);
    $services->set(JumbledIncrementerSniff::class);
    $services->set(UnconditionalIfStatementSniff::class);
    $services->set(UselessOverridingMethodSniff::class);
    $services->set(DiscourageGotoSniff::class);
    $services->set(NoSilencedErrorsSniff::class);
    $services->set(UnnecessaryStringConcatSniff::class);
    $services->set(EvalSniff::class);
    $services->set(CodeAnalyzerSniff::class);
    $services->set(FixmeSniff::class);
    $services->set(UnusedFunctionParameterSniff::class);
    $services->set(CallTimePassByReferenceSniff::class);
    $services->set(DeprecatedFunctionsSniff::class);
    $services->set(GlobalKeywordSniff::class);
    $services->set(OneClassPerFileSniff::class);
    $services->set(OneInterfacePerFileSniff::class);
    $services->set(OneTraitPerFileSniff::class);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(
        Option::SKIP,
        [
            FileHeaderSniff::class => null,
            FileHeaderSniff::class . '.SpacingAfterBlock' => null,
            FileHeaderSniff::class . '.IncorrectOrder' => null,
            FileHeaderSniff::class . '.IncorrectGrouping' => null,
            ArrayDeclarationSniff::class . '.DoubleArrowNotAligned' => null,
            ArrayDeclarationSniff::class . '.NoKeySpecified' => null,
            ArrayDeclarationSniff::class . '.KeySpecified' => null,
            ArrayDeclarationSniff::class . '.SingleLineNotAllowed' => null,
            ArrayDeclarationSniff::class . '.KeyNotAligned' => null,
            ArrayDeclarationSniff::class . '.ValueNotAligned' => null,
            ArrayDeclarationSniff::class . '.CloseBraceNotAligned' => null,
            ArrayDeclarationSniff::class . '.CloseBraceNewLine' => null,
            ArrayDeclarationSniff::class . '.MultiLineNotAllowed' => null,
            UseDeclarationSniff::class . '.UseAfterBrace' => null,
            AnonClassDeclarationSniff::class . '.SpaceAfterKeyword' => null,
            ControlStructureSpacingSniff::class . '.LineAfterClose' => null,
            PostStatementCommentSniff::class . '.Found' => null,
        ]
    );
};
