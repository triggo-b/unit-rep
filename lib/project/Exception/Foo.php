<?php 
namespace project\test\Exception;
use project\Foo as Foo;

class Foo extends Exception {
    public function __construct() {
       echo 33333333333333;
    }
}