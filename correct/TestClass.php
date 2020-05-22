<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Correct;

use Zing\CodingStandard\Correct\Concerns\Testable;

class TestClass implements TestableContract
{
    use Testable;

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
     * TestClass constructor.
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
     * @return string
     */
    public function a($a, $b)
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
}
