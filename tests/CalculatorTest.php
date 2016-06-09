<?php

namespace Tanta\Tests;

use Tanta\Calculator;
use Tanta\Exceptions\NotNumberException;

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
     */
    public function testSuma()
    {
        $this->assertEquals($this->class->suma(5, 3), 8);
    }

    /**
     * @expectedException \Tanta\Exceptions\NotNumberException
     */
    public function testSumaThrowExceptionIfNonNumberIsPassed()
    {
        $value = $this->class->suma('a', 3);
    }
}
