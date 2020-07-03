<?php


namespace Zing\CodingStandard\Correct;
use Zing\CodingStandard\Correct\Concerns\Testable;

class TestClass implements TestableContract
{use Testable;
private const A=1;
public const C = 2;
    public static $config = [
// test
        'test' => true,
    ];
    /** @var Foo */
protected $foo;
    /**
     * @var Bar
     */
public $bar;

    /**
     * TestClass constructor
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

    public function longConditionClosingComment()
    {
        if (random_int(0,1)){
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
        }else{
            echo 22;
        }
    }
}