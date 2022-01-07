<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Printers;

use PhpParser\BuilderFactory;
use PhpParser\Node\Expr;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\Closure;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name;
use PhpParser\Node\Name\FullyQualified;
use PhpParser\Node\Scalar\LNumber;
use PhpParser\Node\Stmt\Declare_;
use PhpParser\Node\Stmt\DeclareDeclare;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Stmt\Nop;
use PhpParser\Node\Stmt\Return_;
use PhpParser\Node\Stmt\Use_;
use PhpParser\Node\Stmt\UseUse;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Zing\CodingStandard\Printer;

abstract class RuleSetPrinter
{
    /**
     * @var \PhpParser\BuilderFactory
     */
    protected $builderFactory;

    /**
     * @var \Zing\CodingStandard\Printer
     */
    protected $printer;

    public function __construct(BuilderFactory $builderFactory, Printer $printer)
    {
        $this->builderFactory = $builderFactory;
        $this->printer = $printer;
    }

    public function print(array $services): string
    {
        $param = $this->builderFactory->param('containerConfigurator')
            ->setType('ContainerConfigurator')
            ->getNode();
        $stmts = [];
        $variable = new Variable('services');

        $stmts[] = new Expression(new Assign($variable, $this->builderFactory->methodCall($param->var, 'services')));
        foreach ($services as $service => $configuration) {
            $classConstFetch = $this->builderFactory->classConstFetch(new FullyQualified($service), 'class');
            $expr = $this->builderFactory->methodCall($variable, 'set', [$classConstFetch]);

            $stmts[] = new Expression($this->configureService($expr, $configuration));
        }

        return $this->printer
            ->prettyPrintFile([
                new Declare_([new DeclareDeclare('strict_types', new LNumber(1))]),
                new Nop(),
                new Use_([new UseUse(new Name(ContainerConfigurator::class))]),
                new Nop(),
                new Return_(new Closure([
                    'static' => true,
                    'returnType' => 'void',
                    'params' => [$param],
                    'stmts' => $stmts,
                ])),
                new Nop(),
            ]);
    }

    abstract public function configureService(Expr $expr, array $configuration): Expr;
}
