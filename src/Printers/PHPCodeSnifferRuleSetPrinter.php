<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Printers;

use PhpParser\Node\Expr;

final class PHPCodeSnifferRuleSetPrinter extends RuleSetPrinter
{
    public function configureService(Expr $expr, array $configuration): Expr
    {
        foreach ($configuration as $key => $value) {
            $expr = $this->builderFactory->methodCall($expr, 'property', [$key, $value]);
        }

        return $expr;
    }
}
