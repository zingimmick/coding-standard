<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Numbers\DisallowNumericLiteralSeparatorSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Operators\NegationOperatorSpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Operators\SpreadOperatorSpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Operators\RequireOnlyStandaloneIncrementAndDecrementOperatorsSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Operators\RequireCombinedAssignmentOperatorSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\ClassMemberSpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\RequireMultiLineMethodSignatureSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\ConstantSpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\TraitUseSpacingSniff::class)
        ->property('linesCountAfterLastUse', '1')
        ->property('linesCountAfterLastUseWhenLastInClass', '0')
        ->property('linesCountBeforeFirstUse', '0');
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\ParentCallSpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\SuperfluousInterfaceNamingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\SuperfluousTraitNamingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\SuperfluousAbstractClassNamingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\DisallowMultiConstantDefinitionSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\ModernClassNameReferenceSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\UselessLateStaticBindingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\DisallowMultiPropertyDefinitionSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\PropertySpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\ClassConstantVisibilitySniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\MethodSpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\DisallowLateStaticBindingForConstantsSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Classes\TraitUseDeclarationSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Whitespaces\DuplicateSpacesSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\PHP\DisallowDirectMagicInvokeCallSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\PHP\RequireNowdocSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\PHP\TypeCastSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\PHP\ForbiddenClassesSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\PHP\ShortListSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\PHP\ReferenceSpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\PHP\OptimizedFunctionsWithoutUnpackingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\PHP\UselessParenthesesSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\PHP\UselessSemicolonSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Exceptions\DeadCatchSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Exceptions\RequireNonCapturingCatchSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Exceptions\ReferenceThrowableOnlySniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\UselessAliasSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\FullyQualifiedClassNameInAnnotationSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\UseDoesNotStartWithBackslashSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\AlphabeticallySortedUsesSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\MultipleUsesPerLineSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\UnusedUsesSniff::class)
        ->property('searchAnnotations', 'true');
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\DisallowGroupUseSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\UseSpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\NamespaceSpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\NamespaceDeclarationSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\RequireOneNamespaceInFileSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Namespaces\UseFromSameNamespaceSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\UselessVariableSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\DisallowSuperGlobalVariableSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\DuplicateAssignmentToVariableSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Arrays\MultiLineArrayEndBracketPlacementSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Arrays\DisallowImplicitArrayCreationSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Arrays\TrailingArrayCommaSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Functions\DisallowNamedArgumentsSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Functions\RequireArrowFunctionSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Functions\UselessParameterDefaultValueSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Functions\ArrowFunctionDeclarationSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullCoalesceOperatorSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireShortTernaryOperatorSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullCoalesceEqualOperatorSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\NewWithParenthesesSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\UselessTernaryOperatorSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowContinueWithoutIntegerOperandInSwitchSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\AssignmentInConditionSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullSafeObjectOperatorSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowNullSafeObjectOperatorSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\LanguageConstructWithParenthesesSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\UselessIfConditionWithReturnSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowYodaComparisonSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\TypeHints\LongTypeHintsSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\TypeHints\NullTypeHintOnLastPositionSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\TypeHints\PropertyTypeHintSpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\TypeHints\UnionTypeHintFormatSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\TypeHints\PropertyTypeHintSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\TypeHints\DeclareStrictTypesSniff::class)
        ->property('newlinesCountBetweenOpenTagAndDeclare', '2')
        ->property('spacesCountAroundEqualsSign', '0');
    $services->set(\SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSpacingSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\TypeHints\NullableTypeForNullDefaultValueSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Commenting\UselessInheritDocCommentSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Commenting\ForbiddenAnnotationsSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Commenting\InlineDocCommentDeclarationSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Commenting\UselessFunctionDocCommentSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Commenting\DocCommentSpacingSniff::class)
        ->property('linesCountBetweenDifferentAnnotationsTypes', '1');
    $services->set(\SlevomatCodingStandard\Sniffs\Commenting\DisallowCommentAfterCodeSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Commenting\ForbiddenCommentsSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Commenting\EmptyCommentSniff::class);
    $services->set(\SlevomatCodingStandard\Sniffs\Commenting\DisallowOneLinePropertyDocCommentSniff::class);
};
