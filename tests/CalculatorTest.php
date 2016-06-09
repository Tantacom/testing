<?php

namespace Tanta\Testing\Tests;

class CalculatorTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Calculator;
     */
    protected $class;
    
    public function setUp()
    {
        $this->class = new \Calculator();
    }

    /**
     * test for the suma method.
     */
    public function testSuma()
    {
        $this->assertEquals($this->class->suma(5, 3), 8);
    }
}
