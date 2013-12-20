<?php
namespace project\test;
use project\Factorial as myClass;

class FactorialTest extends \PHPUnit_Framework_TestCase
{

    public function testZero()
    {
        $my = new myClass;
        $this->assertEquals(1, $my->getFactorial(0));
    }
    
    public function testFive()
    {
        $my = new myClass;
        $this->assertEquals(120, $my->getFactorial(5));
    }
    
    /*--------------------------------------------------------*/
    public function testException()
    {
        $this->setExpectedException('project\Exception\Foo');
        $my = new myClass;
        $my->getFactorial(-1);
        
    }
}