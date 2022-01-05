<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Naming\Rector\Assign\RenameVariableToMatchMethodCallReturnTypeRector;
use Rector\Naming\Rector\ClassMethod\RenameParamToMatchTypeRector;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\Privatization\Rector\MethodCall\PrivatizeLocalGetterToPropertyRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Zing\CodingStandard\Set\RectorSetList;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services=$containerConfigurator->services();
//    $services->set(\Rector\TypeDeclaration\Rector\Closure\AddClosureReturnTypeRector::class);
//    $services->set(\Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictTypedPropertyRector::class);
//    $services->set(\Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector::class);
//    $services->set(\Rector\TypeDeclaration\Rector\Param\ParamTypeFromStrictTypedPropertyRector::class);
//    $services->set(\Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictTypedCallRector::class);
//    $services->set(\Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector::class);
//    $services->set(\Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromReturnNewRector::class);
    $services->set(\Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictGetterMethodReturnTypeRector::class);
//    $services->set(\Rector\TypeDeclaration\Rector\ClassMethod\AddMethodCallBasedStrictParamTypeRector::class);
    $parameters = $containerConfigurator->parameters();
    $parameters->set(
        Option::BOOTSTRAP_FILES,
        [
            __DIR__ . '/vendor/squizlabs/php_codesniffer/autoload.php',
            __DIR__ . '/vendor/symplify/easy-coding-standard/vendor/autoload.php',
        ]
    );
    $parameters->set(
        Option::SKIP,
        [
            RenameParamToMatchTypeRector::class,
            RenameVariableToMatchMethodCallReturnTypeRector::class,
            PrivatizeLocalGetterToPropertyRector::class,
        ]
    );
    $parameters->set(
        Option::PATHS,
        [
            __DIR__ . '/config',
            __DIR__ . '/fixed',
            __DIR__ . '/src',
            __DIR__ . '/tests',
            __DIR__ . '/ecs.php',
            __DIR__ . '/rector.php',
        ]
    );
};
