<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use SlevomatCodingStandard\Sniffs\Arrays\DisallowImplicitArrayCreationSniff;
use SlevomatCodingStandard\Sniffs\Arrays\TrailingArrayCommaSniff;
use SlevomatCodingStandard\Sniffs\Classes\ClassConstantVisibilitySniff;
use SlevomatCodingStandard\Sniffs\Classes\DisallowLateStaticBindingForConstantsSniff;
use SlevomatCodingStandard\Sniffs\Classes\DisallowMultiConstantDefinitionSniff;
use SlevomatCodingStandard\Sniffs\Classes\DisallowMultiPropertyDefinitionSniff;
use SlevomatCodingStandard\Sniffs\Classes\ModernClassNameReferenceSniff;
use SlevomatCodingStandard\Sniffs\Classes\ParentCallSpacingSniff;
use SlevomatCodingStandard\Sniffs\Classes\SuperfluousAbstractClassNamingSniff;
use SlevomatCodingStandard\Sniffs\Classes\SuperfluousInterfaceNamingSniff;
use SlevomatCodingStandard\Sniffs\Classes\SuperfluousTraitNamingSniff;
use SlevomatCodingStandard\Sniffs\Classes\TraitUseDeclarationSniff;
use SlevomatCodingStandard\Sniffs\Classes\TraitUseSpacingSniff;
use SlevomatCodingStandard\Sniffs\Classes\UnusedPrivateElementsSniff;
use SlevomatCodingStandard\Sniffs\Classes\UselessLateStaticBindingSniff;
use SlevomatCodingStandard\Sniffs\Commenting\DisallowCommentAfterCodeSniff;
use SlevomatCodingStandard\Sniffs\Commenting\EmptyCommentSniff;
use SlevomatCodingStandard\Sniffs\Commenting\ForbiddenCommentsSniff;
use SlevomatCodingStandard\Sniffs\Commenting\InlineDocCommentDeclarationSniff;
use SlevomatCodingStandard\Sniffs\Commenting\UselessFunctionDocCommentSniff;
use SlevomatCodingStandard\Sniffs\Commenting\UselessInheritDocCommentSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\AssignmentInConditionSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\DisallowContinueWithoutIntegerOperandInSwitchSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\DisallowYodaComparisonSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\LanguageConstructWithParenthesesSniff;
use SlevomatCodingStandard\Sniffs\ControlStructures\RequireShortTernaryOperatorSniff;
use SlevomatCodingStandard\Sniffs\Exceptions\DeadCatchSniff;
use SlevomatCodingStandard\Sniffs\Exceptions\ReferenceThrowableOnlySniff;
use SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff;
use SlevomatCodingStandard\Sniffs\Functions\UnusedParameterSniff;
use SlevomatCodingStandard\Sniffs\Functions\UselessParameterDefaultValueSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\FullyQualifiedClassNameInAnnotationSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\NamespaceDeclarationSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\NamespaceSpacingSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\RequireOneNamespaceInFileSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\UnusedUsesSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\UseDoesNotStartWithBackslashSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\UseFromSameNamespaceSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\UselessAliasSniff;
use SlevomatCodingStandard\Sniffs\Namespaces\UseSpacingSniff;
use SlevomatCodingStandard\Sniffs\Operators\RequireCombinedAssignmentOperatorSniff;
use SlevomatCodingStandard\Sniffs\Operators\RequireOnlyStandaloneIncrementAndDecrementOperatorsSniff;
use SlevomatCodingStandard\Sniffs\Operators\SpreadOperatorSpacingSniff;
use SlevomatCodingStandard\Sniffs\PHP\DisallowDirectMagicInvokeCallSniff;
use SlevomatCodingStandard\Sniffs\PHP\OptimizedFunctionsWithoutUnpackingSniff;
use SlevomatCodingStandard\Sniffs\PHP\ShortListSniff;
use SlevomatCodingStandard\Sniffs\PHP\TypeCastSniff;
use SlevomatCodingStandard\Sniffs\PHP\UselessParenthesesSniff;
use SlevomatCodingStandard\Sniffs\PHP\UselessSemicolonSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\LongTypeHintsSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\NullableTypeForNullDefaultValueSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\NullTypeHintOnLastPositionSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSpacingSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\PropertyTypeHintSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSpacingSniff;
use SlevomatCodingStandard\Sniffs\TypeHints\UselessConstantTypeHintSniff;
use SlevomatCodingStandard\Sniffs\Variables\DuplicateAssignmentToVariableSniff;
use SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff;
use SlevomatCodingStandard\Sniffs\Variables\UselessVariableSniff;
use SlevomatCodingStandard\Sniffs\Whitespaces\DuplicateSpacesSniff;
use Symplify\EasyCodingStandard\ValueObject\Option;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(TrailingArrayCommaSniff::class);
    $services->set(NamespaceSpacingSniff::class);
    $services->set(RequireOneNamespaceInFileSniff::class);
    $services->set(FullyQualifiedClassNameInAnnotationSniff::class);
    $services->set(UseDoesNotStartWithBackslashSniff::class);
    $services->set(UseSpacingSniff::class);
    $services->set(SpreadOperatorSpacingSniff::class);
    $services->set(ShortListSniff::class);
    $services->set(ParameterTypeHintSpacingSniff::class);
    $services->set(ReturnTypeHintSpacingSniff::class);
    $services->set(ClassConstantVisibilitySniff::class);
    $services->set(DisallowLateStaticBindingForConstantsSniff::class);
    $services->set(ModernClassNameReferenceSniff::class);
    $services->set(UselessLateStaticBindingSniff::class);
    $services->set(DisallowImplicitArrayCreationSniff::class);
    $services->set(AssignmentInConditionSniff::class);
    $services->set(DisallowContinueWithoutIntegerOperandInSwitchSniff::class);
    $services->set(DisallowYodaComparisonSniff::class);
    $services->set(LanguageConstructWithParenthesesSniff::class);
    $services->set(DeadCatchSniff::class);
    $services->set(UnusedInheritedVariablePassedToClosureSniff::class);
    $services->set(UselessParameterDefaultValueSniff::class);
    $services->set(UseFromSameNamespaceSniff::class);
    $services->set(UselessAliasSniff::class);
    $services->set(RequireCombinedAssignmentOperatorSniff::class);
    $services->set(RequireOnlyStandaloneIncrementAndDecrementOperatorsSniff::class);
    $services->set(OptimizedFunctionsWithoutUnpackingSniff::class);
    $services->set(TypeCastSniff::class);
    $services->set(UselessParenthesesSniff::class);
    $services->set(UselessSemicolonSniff::class);
    $services->set(DuplicateAssignmentToVariableSniff::class);
    $services->set(UselessVariableSniff::class);
    $services->set(EmptyCommentSniff::class);
    $services->set(ForbiddenCommentsSniff::class);
    $services->set(InlineDocCommentDeclarationSniff::class);
    $services->set(UselessFunctionDocCommentSniff::class);
    $services->set(UselessInheritDocCommentSniff::class);
    $services->set(LongTypeHintsSniff::class);
    $services->set(NullableTypeForNullDefaultValueSniff::class);
    $services->set(NullTypeHintOnLastPositionSniff::class);
    $services->set(ParameterTypeHintSniff::class);
    $services->set(PropertyTypeHintSniff::class);
    $services->set(ReturnTypeHintSniff::class);
    $services->set(UselessConstantTypeHintSniff::class);
    $services->set(SuperfluousAbstractClassNamingSniff::class);
    $services->set(SuperfluousInterfaceNamingSniff::class);
    $services->set(NamespaceDeclarationSniff::class);
    $services->set(SuperfluousTraitNamingSniff::class);
    $services->set(DisallowDirectMagicInvokeCallSniff::class);
    $services->set(UnusedVariableSniff::class);

    $services->set(UselessVariableSniff::class);

    $services->set(UnusedInheritedVariablePassedToClosureSniff::class);

    $services->set(UselessSemicolonSniff::class);

    $services->set(UselessParenthesesSniff::class);
    $services->set(UnusedPrivateElementsSniff::class);
    $services->set(RequireShortTernaryOperatorSniff::class);

    $services->set(RequireCombinedAssignmentOperatorSniff::class);
    $services->set(DisallowCommentAfterCodeSniff::class);
    $services->set(EmptyCommentSniff::class);
    $services->set(DisallowMultiConstantDefinitionSniff::class);

    $services->set(DisallowMultiPropertyDefinitionSniff::class);
    $services->set(ModernClassNameReferenceSniff::class);
    $services->set(TraitUseDeclarationSniff::class);

    $services->set(NullTypeHintOnLastPositionSniff::class);
    $services->set(UselessAliasSniff::class);

    $services->set(ParentCallSpacingSniff::class);

    $services->set(DuplicateSpacesSniff::class);
    $services->set(TraitUseSpacingSniff::class)
        ->property('linesCountAfterLastUse', 1)
        ->property('linesCountAfterLastUseWhenLastInClass', 0)
        ->property('linesCountBeforeFirstUse', 0)
        ->property('linesCountBetweenUses', 0);

    $services->set(UnusedPrivateElementsSniff::class);

    $services->set(UnusedInheritedVariablePassedToClosureSniff::class);

    $services->set(UnusedParameterSniff::class);

    $services->set(UnusedVariableSniff::class);

    $services->set(ReferenceThrowableOnlySniff::class);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(
        Option::SKIP,
        [
            UnusedParameterSniff::class . '.UnusedParameter' => null,
            DisallowCommentAfterCodeSniff::class . '.DisallowedCommentAfterCode' => null,
            InlineDocCommentDeclarationSniff::class . '.MissingVariable' => null,
            InlineDocCommentDeclarationSniff::class . '.NoAssignment' => null,
            ParameterTypeHintSniff::class . '.MissingTraversableTypeHintSpecification' => null,
            ParameterTypeHintSniff::class . '.MissingAnyTypeHint' => null,
            ParameterTypeHintSniff::class . '.MissingNativeTypeHint' => null,
            ParameterTypeHintSniff::class . '.UselessAnnotation' => null,
            ReturnTypeHintSniff::class . '.MissingTraversableTypeHintSpecification' => null,
            ReturnTypeHintSniff::class . '.MissingAnyTypeHint' => null,
            ReturnTypeHintSniff::class . '.MissingNativeTypeHint' => null,
            ReturnTypeHintSniff::class . '.UselessAnnotation' => null,
            ReturnTypeHintSniff::class . '.SlevomatCodingStandard.TypeHints.ReturnTypeHint.MissingNativeTypeHint' => null,
            PropertyTypeHintSniff::class . '.MissingTraversableTypeHintSpecification' => null,
            PropertyTypeHintSniff::class . '.MissingAnyTypeHint' => null,
            PropertyTypeHintSniff::class . '.MissingNativeTypeHint' => null,
            PropertyTypeHintSniff::class . '.UselessAnnotation' => null,
            UselessFunctionDocCommentSniff::class . '.UselessDocComment' => null,
        ]
    );
};
