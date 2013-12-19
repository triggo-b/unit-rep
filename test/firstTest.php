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
        $this->setExpectedException('Foo');
    }
    public function testExceptionHasRightMessage()
    {
        $this->setExpectedException(
                'Foo', 'wrongWay'
        );
        throw new Foo('Brrrrr', 10);
    }
    
    /*--------------------------------------------------------*/
    

//     public function testException() {
//         try {
//             $my = new myClass;
//             $my->getFactorial(6) == 120;
//         }
//          catch (myException $e) {
//             echo "not working";
//             $e = new myException('big error!!');
//             echo "Details: " . $e->getMessage();
//         }   
//     }

}