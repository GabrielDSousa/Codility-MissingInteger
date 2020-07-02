<?php

/**
 * @param array $A
 * @return int
 */

function solution($A) : int
{
    $max = max($A);
    if($max > 0){
        $B= range(1, $max);
        $i=0;
        $A = array_unique($A);
        sort($A);
        foreach ($A as $k=>$a){
            if($a > 0){
                if($B[$i] == $a){
                    $i++;
                }else{
                    return $B[$i];
                }
            }
        }
        return $max+1;
    }
    return 1;
}

$A =[1, 3, 6, 4, 1, 2];
//$A =[0, 1, 2, 3];
//$A =[-1, -2];
//$A =[4, 5, 6, 2];
echo solution($A);