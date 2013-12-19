<?php
namespace proj;

class Factorial
{

    public function getFactorial($num)
    {
        $num = intval($num);
        if ($num < 0) {
            throw new Exception('wrong way');
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