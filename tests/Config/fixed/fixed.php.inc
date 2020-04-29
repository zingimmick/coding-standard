<?php

namespace Zing\CodingStandard\Tests\Config;

class Foo
{
    public const A = 1;

    public const ARRAY = [
        'a', 'b' => [
            'd' => 1,
        ], 'c',
    ];

    /**
     * @param $a
     * @param $b
     *
     * @return string
     */
    public function a($a, $b)
    {
        return $a + $b;
    }
}
