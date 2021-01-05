<?php


namespace Zing\CodingStandard\Correct;
use App\Modules\Event\Models\Event;
use PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace\ScopeClosingBraceSniff;
use const PHP_EOL;
use function count;
use Zing\CodingStandard\Correct\Concerns\Testable;
use Zing\CodingStandard\Correct\Concerns\TraitA;
use Zing\CodingStandard\Correct\Concerns\TraitB;

class TestClass implements TestableContract
{use Testable,TraitA;

use TraitB;
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
     * @return int
     */
   public function a($a,$b):int {
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
    public function logicalOperators():bool
    {
        return random_int(0, 1) !== 0 and random_int(0, 1) !== 0;
    }

    public function useFunction()
    {
        return count([]);
    }

    public function useConst()
    {
        return PHP_EOL;
    }

    public function testSingleArray()
    {
        return ['a','b'];// post statement comment
    }

    public function testScopeClosingBrace()
    {
        return [
            'eventCrowd' => function ($query) {
                return $query->with('rule');
            },
            'eventAuction' => function ($query) {
                return $query->with('rule');
            },
            'logs' => function ($query) {
                return $query->with(
                    [
                        'admin' => function ($query) {
                            return $query->select('id', 'name');
                        },
                    ]
                );
            },
            'images',
        ];
    }

    public function getClassName($object): string
    {
        return get_class($object);
    }

    public function foo(): Foo
    {
        return $this->foo;
    }
}