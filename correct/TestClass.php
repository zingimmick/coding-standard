<?php

declare(strict_types=1);

namespace Zing\CodingStandard\Correct;

use Zing\CodingStandard\Correct\Concerns\Testable;
use Zing\CodingStandard\Correct\Concerns\TraitA;
use Zing\CodingStandard\Correct\Concerns\TraitB;

class TestClass implements TestableContract
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
     * @var \Zing\CodingStandard\Correct\Bar
     */
    public $bar;

    /**
     * @param \Zing\CodingStandard\Correct\Foo $foo the first param
     * @param \Zing\CodingStandard\Correct\Bar $bar the second param
     */
    public function __construct(
        protected Foo $foo,
        Bar $bar
    ) {
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
        if (random_int(0, 1)) {
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
        return \count([]);
    }

    public function useConst(): string
    {
        return PHP_EOL;
    }

    /**
     * @return array<int, string>
     */
    public function testSingleArray(): array
    {
        // post statement comment
        return ['a', 'b'];
    }

    /**
     * @return array<string|int, \Closure(mixed $query): mixed|string>
     */
    public function testScopeClosingBrace(): array
    {
        return [
            'eventCrowd' => static fn ($query) => $query->with('rule'),
            'eventAuction' => static fn ($query) => $query->with('rule'),
            'logs' => static fn ($query) => $query->with(
                [
                    'admin' => static fn ($query) => $query->select('id', 'name'),
                ]
            ),
            'images',
        ];
    }

    /**
     * @param mixed $object
     */
    public function getClassName($object): string
    {
        return $object::class;
    }

    public function foo(): Foo
    {
        return $this->foo;
    }
}
