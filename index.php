<?php 
public function getFactorial($num)
{
    try {
        if ($num && $num > 0) {
            if ($num === 0) {
                $overall = 1;
            }
            else {
                $overall = $num;
            }
            for ($i = $num; $i > 0; $i --) {
                $overall *= $i;
            }
            return $overall;
        }
        else {
            throw new Exception('неверно');
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
}