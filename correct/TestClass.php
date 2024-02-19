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
     * TestClass constructor.
     *
     * @param \Zing\CodingStandard\Correct\Foo $foo the first param
     * @param \Zing\CodingStandard\Correct\Bar $bar the second param
     */
    public function __construct(
        private Foo $foo,
        public Bar $bar
    ) {
    }

    public function a(mixed $a, mixed $b): int
    {
        if (! $a) {
            return 0;
        }

        return $a + $b;
    }

    public function concat(mixed $a): string
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
        return \count([]);
    }

    public function useConst()
    {
        return PHP_EOL;
    }

    public function testSingleArray(): array
    {
        // post statement comment
        return ['a', 'b'];
    }

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

    public function getClassName(mixed $object): string
    {
        return $object::class;
    }

    public function foo(): Foo
    {
        return $this->foo;
    }
}
