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
     * @param Foo $foo the first param
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
     * @return int
     */
   public function a($a,$b):int {
       if(!$a)return 0;
        return  $a+$b;
    }

    /**
     * @param mixed $a
     * @return string
     */
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
        }else{
            echo 3;
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

    /**
     * @param mixed $object
     * @return string
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
