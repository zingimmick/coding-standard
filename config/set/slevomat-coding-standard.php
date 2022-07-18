<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Numbers\DisallowNumericLiteralSeparatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Operators\NegationOperatorSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Operators\SpreadOperatorSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Operators\RequireOnlyStandaloneIncrementAndDecrementOperatorsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Operators\RequireCombinedAssignmentOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\ClassMemberSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\RequireMultiLineMethodSignatureSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\PropertyDeclarationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\ConstantSpacingSniff::class);
    $ecsConfig->ruleWithConfiguration(\SlevomatCodingStandard\Sniffs\Classes\TraitUseSpacingSniff::class, [
        'linesCountAfterLastUse' => '1',
        'linesCountAfterLastUseWhenLastInClass' => '0',
        'linesCountBeforeFirstUse' => '0',
    ]);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\ParentCallSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\SuperfluousInterfaceNamingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\SuperfluousTraitNamingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\SuperfluousAbstractClassNamingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\DisallowMultiConstantDefinitionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\ModernClassNameReferenceSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\UselessLateStaticBindingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\DisallowMultiPropertyDefinitionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\PropertySpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\ClassLengthSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\ClassConstantVisibilitySniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\BackedEnumTypeSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\MethodSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\DisallowLateStaticBindingForConstantsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Classes\TraitUseDeclarationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Complexity\CognitiveSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Whitespaces\DuplicateSpacesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\DisallowDirectMagicInvokeCallSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\RequireNowdocSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\TypeCastSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\ForbiddenClassesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\ShortListSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\ReferenceSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\OptimizedFunctionsWithoutUnpackingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\UselessParenthesesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\PHP\UselessSemicolonSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Exceptions\DeadCatchSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Exceptions\DisallowNonCapturingCatchSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Exceptions\RequireNonCapturingCatchSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Exceptions\ReferenceThrowableOnlySniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\UselessAliasSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\FullyQualifiedClassNameInAnnotationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\UseDoesNotStartWithBackslashSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\AlphabeticallySortedUsesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\MultipleUsesPerLineSniff::class);
    $ecsConfig->ruleWithConfiguration(\SlevomatCodingStandard\Sniffs\Namespaces\UnusedUsesSniff::class, [
        'searchAnnotations' => 'true',
    ]);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\DisallowGroupUseSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\UseSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\NamespaceSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\NamespaceDeclarationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\RequireOneNamespaceInFileSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Namespaces\UseFromSameNamespaceSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Variables\UselessVariableSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Variables\DisallowSuperGlobalVariableSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Variables\DuplicateAssignmentToVariableSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Arrays\MultiLineArrayEndBracketPlacementSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Arrays\DisallowImplicitArrayCreationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Arrays\TrailingArrayCommaSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Files\FileLengthSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\DisallowNamedArgumentsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\RequireArrowFunctionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\DisallowTrailingCommaInClosureUseSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\UnusedInheritedVariablePassedToClosureSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\RequireTrailingCommaInClosureUseSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\UselessParameterDefaultValueSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Functions\ArrowFunctionDeclarationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullCoalesceOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireShortTernaryOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullCoalesceEqualOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\NewWithParenthesesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\UselessTernaryOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowContinueWithoutIntegerOperandInSwitchSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\AssignmentInConditionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\RequireNullSafeObjectOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowNullSafeObjectOperatorSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\LanguageConstructWithParenthesesSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\UselessIfConditionWithReturnSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\ControlStructures\DisallowYodaComparisonSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\ParameterTypeHintSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\LongTypeHintsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\NullTypeHintOnLastPositionSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\UnionTypeHintFormatSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\PropertyTypeHintSniff::class);
    $ecsConfig->ruleWithConfiguration(\SlevomatCodingStandard\Sniffs\TypeHints\DeclareStrictTypesSniff::class, [
        'spacesCountAroundEqualsSign' => '0',
    ]);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSpacingSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\NullableTypeForNullDefaultValueSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\TypeHints\ReturnTypeHintSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\UselessInheritDocCommentSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\ForbiddenAnnotationsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\InlineDocCommentDeclarationSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\UselessFunctionDocCommentSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\DisallowCommentAfterCodeSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\ForbiddenCommentsSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\EmptyCommentSniff::class);
    $ecsConfig->rule(\SlevomatCodingStandard\Sniffs\Commenting\DisallowOneLinePropertyDocCommentSniff::class);
};
