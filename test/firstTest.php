<?php
// require_once 'factorial.php';

namespace proj\test;

use proj\Factorial as myClass;

class FactorialTest extends \PHPUnit_Framework_TestCase
{
    public function testFactorial()
    {
        $my = new myClass;
        $this->assertEquals(1, $my->getFactorial(5));
    }
}