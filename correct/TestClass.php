<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Correct;

use Zing\CodingStandard\Correct\Concerns\Testable;
use Zing\CodingStandard\Correct\Concerns\TraitA;
use Zing\CodingStandard\Correct\Concerns\TraitB;
use function count;
use const PHP_EOL;

final class TestClass implements TestableContract
{
    use Testable;
    use TraitA;
    use TraitB;

    public const C = 2;

    private const A = 1;

    public static $config = [
        // test
        'test' => true,
    ];

    /**
     * @var \Zing\CodingStandard\Correct\Foo
     */
    protected $foo;

    /**
     * @var \Zing\CodingStandard\Correct\Bar
     */
    public $bar;

    /**
     * TestClass constructor
     *
     * @param \Zing\CodingStandard\Correct\Foo $foo
     * @param \Zing\CodingStandard\Correct\Bar $bar
     */
    public function __construct(Foo $foo, Bar $bar)
    {
        $this->foo = $foo;
        $this->bar = $bar;
    }

    /**
     * @param $a
     * @param $b
     *
     * @return int
     */
    public function a($a, $b): int
    {
        if (! $a) {
            return 0;
        }

        return $a + $b;
    }

    public function concat($a)
    {
        return $a . '';
    }

    public function test(): void
    {
    }

    public function formatConst()
    {
        return self::A ?? self::C;
    }

    public function longConditionClosingComment(): void
    {
        if (random_int(0, 1) !== 0) {
            echo 1;
            echo 2;
            echo 3;
            echo 4;
            echo 5;
            echo 6;
            echo 7;
            echo 8;
            echo 9;
            echo 10;
            echo 11;
            echo 12;
            echo 13;
            echo 14;
            echo 15;
            echo 16;
            echo 17;
            echo 18;
            echo 19;
            echo 20;
            echo 21;
        } else {
            echo 22;
        }//end if
    }

    public function logicalOperators(): bool
    {
        return random_int(0, 1) !== 0 && random_int(0, 1) !== 0;
    }

    public function useFunction()
    {
        return count([]);
    }

    public function useConst()
    {
        return PHP_EOL;
    }
}
