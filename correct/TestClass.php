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

    /**
     * @var int
     */
    public const C = 2;

    /**
     * @var int
     */
    private const A = 1;

    /**
     * @var array<string, bool>
     */
    public static $config = [
        // test
        'test' => true,
    ];

    /**
     * @var \Zing\CodingStandard\Correct\Foo
     */
    private $foo;

    /**
     * @var \Zing\CodingStandard\Correct\Bar
     */
    public $bar;

    /**
     * TestClass constructor.
     *
     * @param \Zing\CodingStandard\Correct\Foo $foo the first param
     * @param \Zing\CodingStandard\Correct\Bar $bar the second param
     */
    public function __construct(Foo $foo, Bar $bar)
    {
        $this->foo = $foo;
        $this->bar = $bar;
    }

    /**
     * @param mixed $a
     * @param mixed $b
     */
    public function a($a, $b): int
    {
        if (! $a) {
            return 0;
        }

        return $a + $b;
    }

    /**
     * @param mixed $a
     */
    public function concat($a): string
    {
        return $a . '';
    }

    public function test(): void
    {
    }

    public function formatConst(): int
    {
        return self::A ?? self::C;
    }

    public function longConditionClosingComment(): void
    {
        if (random_int(0, 1) !== 0) {
            echo 1;
            echo 2;
        } else {
            echo 3;
        }
    }

    public function logicalOperators(): bool
    {
        return random_int(0, 1) !== 0 && random_int(0, 1) !== 0;
    }

    public function useFunction(): int
    {
        return count([]);
    }

    public function useConst(): string
    {
        return PHP_EOL;
    }

    /**
     * @return string[]
     */
    public function testSingleArray(): array
    {
        // post statement comment
        return ['a', 'b'];
    }

    /**
     * @return array<int|string, mixed>
     */
    public function testScopeClosingBrace(): array
    {
        return [
            'eventCrowd' => function ($query) {
                return $query->with('rule');
            },
            'eventAuction' => function ($query) {
                return $query->with('rule');
            },
            'logs' => function ($query) {
                return $query->with([
                    'admin' => function ($query) {
                        return $query->select('id', 'name');
                    },
                ]);
            },
            'images',
        ];
    }

    /**
     * @param mixed $object
     */
    public function getClassName($object): string
    {
        return get_class($object);
    }

    public function foo(): Foo
    {
        return $this->foo;
    }
}
