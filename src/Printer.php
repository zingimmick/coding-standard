<?php

declare(strict_types=1);

namespace Zing\CodingStandard;

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
        return preg_replace('#\\s+#', '', parent::pStmt_Declare($node));
    }

    /**
     * @param \PhpParser\Node[] $nodes
     */
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
        $nextCallIndentReplacement = ')' . PHP_EOL . preg_replace(
            '#(?:^|[\\r\\n]+)(?=[^\\r\\n])#',
            '$0' . \str_repeat(' ', 8),
            '->'
        );
        $content = parent::pExpr_MethodCall($node);
        $content = preg_replace('#\\n#', PHP_EOL . str_repeat(' ', 4), $content);

        return preg_replace('#\)->#', $nextCallIndentReplacement, $content);
    }

    protected function pExpr_Closure(Closure $node): string
    {
        return preg_replace('#\) : void#', '): void', parent::pExpr_Closure($node));
    }
}
