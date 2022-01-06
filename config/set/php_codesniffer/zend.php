<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(\PHP_CodeSniffer\Standards\Zend\Sniffs\Files\ClosingTagSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Zend\Sniffs\NamingConventions\ValidVariableNameSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Zend\Sniffs\Debug\CodeAnalyzerSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\FunctionCallArgumentSpacingSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Functions\OpeningFunctionBraceBsdAllmanSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\DisallowShortOpenTagSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\DisallowTabIndentSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Classes\ClassDeclarationSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\ControlStructures\ControlSignatureSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\FunctionCallSignatureSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\Functions\ValidDefaultValueSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ScopeClosingBraceSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Squiz\Sniffs\Functions\GlobalFunctionSniff::class);
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff::class)
        ->property('lineLimit', '80')
        ->property('absoluteLineLimit', '120');
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineEndingsSniff::class)
        ->property('eolChar', '\\n');
};
