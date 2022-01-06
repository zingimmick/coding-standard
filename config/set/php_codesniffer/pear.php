<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Classes\ClassDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ScopeIndentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ObjectOperatorIndentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Formatting\MultiLineAssignmentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Files\IncludingFileSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\FunctionCallSignatureSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\FunctionDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\ValidDefaultValueSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\ControlStructures\ControlSignatureSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\ControlStructures\MultiLineConditionSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\NamingConventions\ValidClassNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\NamingConventions\ValidFunctionNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\NamingConventions\ValidVariableNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\FunctionCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\InlineCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\ClassCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\FileCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\FunctionCallArgumentSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\NamingConventions\UpperCaseConstantNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\LowerCaseConstantSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowShortOpenTagSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Commenting\DocCommentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Commenting\DocCommentAlignmentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff::class)
        ->property('lineLimit', '85')
        ->property('absoluteLineLimit', '0');
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff::class)
        ->property('eolChar', '\\n');
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\ControlStructures\InlineControlStructureSniff::class)
        ->property('error', 'false');
};
