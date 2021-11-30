<?php

declare(strict_types=1);

namespace Zing\CodingStandard;

use Nette\Utils\Strings;
use PhpParser\Node\Expr\ArrayItem;
use PhpParser\Node\Expr\Closure;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt\Declare_;
use PhpParser\PrettyPrinter\Standard;

final class Printer extends Standard
{
    protected function pStmt_Declare(Declare_ $node): string
    {
        return Strings::replace(parent::pStmt_Declare($node), '#\\s+#', '');
    }

    protected function hasNodeWithComments(array $nodes): bool
    {
        if (count($nodes) >= 8) {
            return true;
        }

        if (! isset($nodes[0])) {
            return parent::hasNodeWithComments($nodes);
        }

        if (! $nodes[0] instanceof ArrayItem) {
            return parent::hasNodeWithComments($nodes);
        }

        if (! $nodes[0]->value instanceof Scalar) {
            return true;
        }

        if ($nodes[0]->key !== null) {
            return true;
        }

        return parent::hasNodeWithComments($nodes);
    }

    protected function pExpr_MethodCall(MethodCall $node): string
    {
        $nextCallIndentReplacement = ')' . PHP_EOL . Strings::indent('->', 8, ' ');
        $content = parent::pExpr_MethodCall($node);
        $content = Strings::replace($content, '#\\n#', PHP_EOL . str_repeat(' ', 4));

        return Strings::replace($content, '#\)->#', $nextCallIndentReplacement);
    }

    protected function pExpr_Closure(Closure $node): string
    {
        return Strings::replace(parent::pExpr_Closure($node), '#\) : void#', '): void');
    }
}
