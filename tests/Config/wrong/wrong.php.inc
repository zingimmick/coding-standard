<?php


namespace Zing\CodingStandard\Tests\PhpCsFixer;

class Foo
{public const A = 1;

    /**
     * @param $a
     * @param $b
     * @return string
     */
    function a($a,$b){

        return  $a+$b;
    }
}