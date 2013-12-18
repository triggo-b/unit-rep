<?php

class Factorial
{

    public function getFactorial ($num)
    {
        $i = $num;
        if ($num == 0) {
            $num = 1;
        }
        if ($num < 0) {
            return $this->error();
        } else {
            for ($i; $i > 0; $i --) {
                $num = $num * $i;
            }
        }
        return $num;
    }

    public function error ()
    {
        $errtxt = "число меньше 0";
        return $errtxt;
    }
}
$f = new Factorial();
echo $f->getFactorial(- 1);