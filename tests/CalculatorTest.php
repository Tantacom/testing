<?php

namespace Tanta\Tests;

use Tanta\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Calculator;
     */
    protected $class;
    
    public function setUp()
    {
        $this->class = new Calculator();
    }

    /**
     * test for the suma method.
     * @dataProvider validDataProvider
     */
    public function testSuma($a, $b, $c)
    {
        $this->assertEquals($this->class->suma($a, $b), $c);
    }

    public function validDataProvider() {
        return [
            [1, 3, 4],
            [2, 6, 8],
            [5, 6, 11]
        ];
    }

    /**
     * @expectedException \Tanta\Exceptions\NotNumberException
     * @dataProvider sumaInvalidDataProvider
     */
    public function testSumaThrowExceptionIfNonNumberIsPassed($a, $b)
    {
        $this->class->suma($a, $b);
    }

    public function sumaInvalidDataProvider() {
        return [
            ['a', 2],
            [3, 'b'],
            ['a', 'b'],
            [array(), 1],
            [1, array()],
            [null, 3],
            [3, null],
            [array(), null],
            [null, array()],
        ];
    }
}
