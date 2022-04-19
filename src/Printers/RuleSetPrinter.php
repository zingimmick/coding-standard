<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Printers;

use PhpParser\BuilderFactory;
use PhpParser\Node\Expr\Closure;
use PhpParser\Node\Name\FullyQualified;
use PhpParser\Node\Scalar\LNumber;
use PhpParser\Node\Stmt\Declare_;
use PhpParser\Node\Stmt\DeclareDeclare;
use PhpParser\Node\Stmt\Expression;
use PhpParser\Node\Stmt\Nop;
use PhpParser\Node\Stmt\Return_;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Zing\CodingStandard\Printer;

class RuleSetPrinter
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
            ->setType(new FullyQualified(ECSConfig::class))
            ->getNode();
        $stmts = [];
        foreach ($services as $service => $configuration) {
            $classConstFetch = $this->builderFactory->classConstFetch(new FullyQualified($service), 'class');
            if ($configuration !== []) {
                $expr = $this->builderFactory->methodCall(
                    $param->var,
                    'ruleWithConfiguration',
                    [$classConstFetch, $configuration]
                );
            } else {
                $expr = $this->builderFactory->methodCall($param->var, 'rule', [$classConstFetch]);
            }

            $stmts[] = new Expression($expr);
        }

        return $this->printer
            ->prettyPrintFile([
                new Declare_([new DeclareDeclare('strict_types', new LNumber(1))]),
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
}
