<?php


namespace Zing\CodingStandard\Tests;
use Foo;
use Bar;
class TestClass implements TestableContract
{use Testable;
private const A=1;
public const C = 2;

    /** @var Foo */
protected $foo;
    /**
     * @var Bar
     */
public $bar;
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

    public function test(): void
    {


    }

    public function formatConst()
    {
        return self::A??self::C;
    }
}