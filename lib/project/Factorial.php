<?php
namespace project;

class Factorial
{

    public function getFactorial($num)
    {
        $num = intval($num);
        if ($num < 0) {
            throw new Exception\Foo('wrongWay');
        }
        if ($num === 0) {
            return 1;
        }
        $overall = $num;
        for ($i = ($num-1); $i > 0; $i--) {
            $overall *= $i;
        }
        return $overall;
    }
}


