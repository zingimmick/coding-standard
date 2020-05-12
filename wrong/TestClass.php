<?php


namespace Zing\CodingStandard\Correct;
use Zing\CodingStandard\Correct\Concerns\Testable;

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
     * TestClass constructor.
     * @param Foo $foo
     * @param Bar $bar
     */
    public function __construct(Foo $foo, Bar $bar)
    {
        $this->foo = $foo;
        $this->bar = $bar;
    }

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