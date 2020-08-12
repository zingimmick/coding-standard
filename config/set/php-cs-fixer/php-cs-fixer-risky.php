<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ClassNotation\FinalInternalClassFixer;
use PhpCsFixer\Fixer\Comment\CommentToPhpdocFixer;
use PhpCsFixer\Fixer\FunctionNotation\NoUnreachableDefaultArgumentValueFixer;
use PhpCsFixer\Fixer\LanguageConstruct\NoUnsetOnPropertyFixer;
use PhpCsFixer\Fixer\Operator\LogicalOperatorsFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitSetUpTearDownVisibilityFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestAnnotationFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestCaseStaticMethodCallsFixer;
use PhpCsFixer\Fixer\Strict\StrictComparisonFixer;
use PhpCsFixer\Fixer\Strict\StrictParamFixer;
use PhpCsFixer\Fixer\StringNotation\StringLineEndingFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/../../../vendor/symplify/easy-coding-standard/config/set/symfony-risky.php', null, true);

    $containerConfigurator->import(__DIR__ . '/../../../../../symplify/easy-coding-standard/config/set/symfony-risky.php', null, true);

    $services = $containerConfigurator->services();
    $services->set(CommentToPhpdocFixer::class);
    $services->set(FinalInternalClassFixer::class);
    $services->set(LogicalOperatorsFixer::class);
    $services->set(NoUnreachableDefaultArgumentValueFixer::class);
    $services->set(NoUnsetOnPropertyFixer::class);
    $services->set(PhpUnitSetUpTearDownVisibilityFixer::class);
    $services->set(PhpUnitStrictFixer::class);
    $services->set(PhpUnitTestAnnotationFixer::class);
    $services->set(PhpUnitTestCaseStaticMethodCallsFixer::class);
    $services->set(StrictComparisonFixer::class);
    $services->set(StrictParamFixer::class);
    $services->set(StringLineEndingFixer::class);
};
