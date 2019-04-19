<?php
/**
 * 9. Palindrome Number
 * @authors rewrite (you@example.org)
 * @date    2019-04-19 09:56:56
 * @version $Id$
 * 
 * Difficulty: Easy
 * Determine whether an integer is a palindrome. 
 * An integer is a palindrome when it reads the same backward as forward.
 */

/**
 * Example 1:
 *      Input: 121
 *      Output: true
 * 
 * Example 2:
 *      Input: -121
 *      Output: false
 *      Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
 * @param Integer $x
 * @return Boolean
 */
function isPalindrome($x) {

    if( abs($x) != $x ){
        return false;
    }

    $tmp = $x;
    $ans = 0;
    while ($x != 0) {
        $pop = (int)($x % 10);
        $x = (int)($x / 10);

        $ans = $ans * 10 + $pop;
    }

    if($ans != $tmp) {
        return false;
    }else{
        return true;
    }
}