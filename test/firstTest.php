<?php
namespace project\test;

use project\Factorial as myClass;

class FactorialTest extends \PHPUnit_Framework_TestCase
{
    public function testFactorial()
    {
        $my = new myClass;
        $this->assertEquals(1, $my->getFactorial(5));
    }
}