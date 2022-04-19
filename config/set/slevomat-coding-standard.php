<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $containerConfigurator): void {
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Numbers\DisallowNumericLiteralSeparatorSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Operators\NegationOperatorSpacingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Operators\SpreadOperatorSpacingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Operators\RequireOnlyStandaloneIncrementAndDecrementOperatorsSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Operators\RequireCombinedAssignmentOperatorSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\ClassMemberSpacingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\RequireMultiLineMethodSignatureSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\ConstantSpacingSniff::class);
    $containerConfigurator->ruleWithConfiguration(\SlevomatCodingStandard\Sniffs\Classes\TraitUseSpacingSniff::class, [
        'linesCountAfterLastUse' => '1',
        'linesCountAfterLastUseWhenLastInClass' => '0',
        'linesCountBeforeFirstUse' => '0',
    ]);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\ParentCallSpacingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\SuperfluousInterfaceNamingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\SuperfluousTraitNamingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\SuperfluousAbstractClassNamingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\DisallowMultiConstantDefinitionSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\ModernClassNameReferenceSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\UselessLateStaticBindingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\DisallowMultiPropertyDefinitionSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\PropertySpacingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\ClassConstantVisibilitySniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\MethodSpacingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\DisallowLateStaticBindingForConstantsSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Classes\TraitUseDeclarationSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Whitespaces\DuplicateSpacesSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\PHP\DisallowDirectMagicInvokeCallSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\PHP\RequireNowdocSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\PHP\TypeCastSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\PHP\ForbiddenClassesSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\PHP\ShortListSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\PHP\ReferenceSpacingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\PHP\OptimizedFunctionsWithoutUnpackingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\PHP\UselessParenthesesSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\PHP\UselessSemicolonSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Exceptions\DeadCatchSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Exceptions\DisallowNonCapturingCatchSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Exceptions\RequireNonCapturingCatchSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Exceptions\ReferenceThrowableOnlySniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Namespaces\UselessAliasSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Namespaces\FullyQualifiedClassNameInAnnotationSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Namespaces\UseDoesNotStartWithBackslashSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Namespaces\AlphabeticallySortedUsesSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Namespaces\MultipleUsesPerLineSniff::class);
    $containerConfigurator->ruleWithConfiguration(\SlevomatCodingStandard\Sniffs\Namespaces\UnusedUsesSniff::class, [
        'searchAnnotations' => 'true',
    ]);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Namespaces\DisallowGroupUseSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Namespaces\UseSpacingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Namespaces\NamespaceSpacingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Namespaces\NamespaceDeclarationSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Namespaces\RequireOneNamespaceInFileSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Namespaces\UseFromSameNamespaceSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Variables\UselessVariableSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Variables\DisallowSuperGlobalVariableSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Variables\DuplicateAssignmentToVariableSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Arrays\MultiLineArrayEndBracketPlacementSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Arrays\DisallowImplicitArrayCreationSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Arrays\TrailingArrayCommaSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Functions\DisallowNamedArgumentsSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Functions\RequireArrowFunctionSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Functions\UselessParameterDefaultValueSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Functions\ArrowFunctionDeclarationSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullCoalesceOperatorSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireShortTernaryOperatorSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullCoalesceEqualOperatorSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\NewWithParenthesesSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\UselessTernaryOperatorSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowContinueWithoutIntegerOperandInSwitchSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\AssignmentInConditionSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullSafeObjectOperatorSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowNullSafeObjectOperatorSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\LanguageConstructWithParenthesesSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\UselessIfConditionWithReturnSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowYodaComparisonSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSpacingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\TypeHints\LongTypeHintsSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\TypeHints\NullTypeHintOnLastPositionSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\TypeHints\PropertyTypeHintSpacingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\TypeHints\UnionTypeHintFormatSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\TypeHints\PropertyTypeHintSniff::class);
    $containerConfigurator->ruleWithConfiguration(\SlevomatCodingStandard\Sniffs\TypeHints\DeclareStrictTypesSniff::class, [
        'spacesCountAroundEqualsSign' => '0',
    ]);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSpacingSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\TypeHints\NullableTypeForNullDefaultValueSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Commenting\UselessInheritDocCommentSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Commenting\ForbiddenAnnotationsSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Commenting\InlineDocCommentDeclarationSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Commenting\UselessFunctionDocCommentSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Commenting\DisallowCommentAfterCodeSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Commenting\ForbiddenCommentsSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Commenting\EmptyCommentSniff::class);
    $containerConfigurator->rule(\SlevomatCodingStandard\Sniffs\Commenting\DisallowOneLinePropertyDocCommentSniff::class);
};
