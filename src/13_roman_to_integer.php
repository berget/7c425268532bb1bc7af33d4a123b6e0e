<?php
/**
 * 13. Roman to Integer
 * @authors rewrite (you@example.org)
 * @date    2019-04-22 09:09:56
 * @version $Id$
 * 
 * Difficulty: Easy
 * @link https://leetcode.com/problems/roman-to-integer/
 */

/**
 * @param String $s
 * @return Integer
 */
function romanToInt($s) {
    $roman_numbers = array(
        'M'   =>  1000,
        'CM'  =>  900,
        'D'   =>  500,
        'CD'  =>  400,
        'C'   =>  100,
        'XC'  =>  90,
        'L'   =>  50,
        'XL'  =>  40,
        'X'   =>  10,
        'IX'  =>  9,
        'V'   =>  5,
        'IV'  =>  4,
        'I'   =>  1,
    );

    $ans = 0;
    foreach ($roman_numbers as $key => $value) {
       while ((strpos($s, $key) === 0)) {
            $ans += $value; 
            $s = substr($s, strlen($key));
       }
    }
    
    return $ans;
}