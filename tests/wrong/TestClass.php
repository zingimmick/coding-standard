<?php


namespace Zing\CodingStandard\Tests;
class TestClass
{use Testable;
    public const A = 1;

    /**
     * @param $a
     * @param $b
     * @return string
     */
   public function a($a,$b){
       if(!$a)return 0;
        return  $a+$b;
    }

    public function concat($a)
    {
        return  $a.'';
    }
}