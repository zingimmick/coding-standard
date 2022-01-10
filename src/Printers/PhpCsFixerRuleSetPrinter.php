<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Printers;

use PhpParser\Node\Expr;

final class PhpCsFixerRuleSetPrinter extends RuleSetPrinter
{
    public function configureService(Expr $expr, array $configuration): Expr
    {
        if ($configuration !== []) {
            $expr = $this->builderFactory->methodCall($expr, 'call', ['configure', [$configuration]]);
        }

        return $expr;
    }
}
