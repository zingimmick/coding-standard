<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(\PhpCsFixer\Fixer\ClassNotation\NoPhp4ConstructorFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\FinalInternalClassFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\NoUselessSprintfFixer::class);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\DirConstantFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\NoAliasFunctionsFixer::class)
        ->call('configure', [
            [
                'sets' => ['@all'],
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\ImplodeCallFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\PowToExponentiationFixer::class);
    $services->set(\PhpCsFixer\Fixer\Strict\StrictParamFixer::class);
    $services->set(\PhpCsFixer\Fixer\Comment\CommentToPhpdocFixer::class);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\NoUnsetOnPropertyFixer::class);
    $services->set(\PhpCsFixer\Fixer\ConstantNotation\NativeConstantInvocationFixer::class)
        ->call('configure', [
            [
                'fix_built_in' => false,
                'include' => ['DIRECTORY_SEPARATOR', 'PHP_INT_SIZE', 'PHP_SAPI', 'PHP_VERSION_ID'],
                'scope' => 'namespaced',
                'strict' => true,
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer::class);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\FunctionToConstantFixer::class);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\NativeFunctionInvocationFixer::class)
        ->call('configure', [
            [
                'include' => ['@compiler_optimized'],
                'scope' => 'namespaced',
                'strict' => true,
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\StringNotation\StringLengthToEmptyFixer::class);
    $services->set(\PhpCsFixer\Fixer\Operator\TernaryToElvisOperatorFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\ArrayPushFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\EregToPregFixer::class);
    $services->set(\PhpCsFixer\Fixer\LanguageConstruct\ErrorSuppressionFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\FopenFlagOrderFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\FopenFlagsFixer::class)
        ->call('configure', [
            [
                'b_mode' => false,
            ],
        ]);
    $services->set(\PhpCsFixer\Fixer\Operator\LogicalOperatorsFixer::class);
    $services->set(\PhpCsFixer\Fixer\CastNotation\ModernizeTypesCastingFixer::class);
    $services->set(\PhpCsFixer\Fixer\Naming\NoHomoglyphNamesFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\NoUnneededFinalMethodFixer::class);
    $services->set(\PhpCsFixer\Fixer\FunctionNotation\NoUnreachableDefaultArgumentValueFixer::class);
    $services->set(\PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\OrderedTraitsFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitMockShortWillReturnFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitSetUpTearDownVisibilityFixer::class);
    $services->set(\PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer::class);
    $services->set(\PhpCsFixer\Fixer\Alias\SetTypeToCastFixer::class);
    $services->set(\PhpCsFixer\Fixer\StringNotation\StringLineEndingFixer::class);
    $services->set(\PhpCsFixer\Fixer\StringNotation\NoTrailingWhitespaceInStringFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitTestCaseStaticMethodCallsFixer::class);
    $services->set(\PhpCsFixer\Fixer\Strict\StrictComparisonFixer::class);
    $services->set(\PhpCsFixer\Fixer\PhpUnit\PhpUnitConstructFixer::class);
    $services->set(\PhpCsFixer\Fixer\Basic\PsrAutoloadingFixer::class);
};
