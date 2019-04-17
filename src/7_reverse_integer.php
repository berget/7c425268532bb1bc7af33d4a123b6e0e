<?php
/**
 * 7. Reverse Integer
 * @authors rewrite (you@example.org)
 * @date    2019-04-17 08:46:56
 * @version $Id$
 * 
 * Difficulty: Easy
 * Given a 32-bit signed integer, reverse digits of an integer.
 */

/**
 * Example 1:
 *      Input: 123
 *      Output: 321
 * 
 * Example 2:
 *      Input: -123
 *      Output: -321
 * 
 * Example 3:
 *      Input: 120
 *      Output: 21
 *
 * @param Integer $x
 * @return Integer
 */
function reversInteger($x) {
    $arr_x = preg_split('//', $x, -1, PREG_SPLIT_NO_EMPTY);

    $max_value = pow(2,31) - 1;
    $negative = false;
    if($arr_x[0] === '-') {
        $negative = true;
        $max_value += 1;
        array_shift($arr_x);
    }
    
    $ans = '';
    $length = count($arr_x);
    for ($i=$length-1; $i >= 0; $i--) {
        $ans .= $arr_x[$i];
    }

    $ans = (int)$ans;
    
    if($max_value < $ans) {
        $ans = 0;
    }
    
    if($negative && ($ans!=0)) {
        $ans = '-'. $ans;
    }
    
    return $ans;
}