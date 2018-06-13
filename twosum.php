<?php
/**
 * LeetCode 1. Two Sum
 *
 * @authors Your Name (you@example.org)
 * @date    2018-06-14 01:33:24
 * @version $Id$
 */

function twoSum($nums, $target) {
	$fruit = count($nums);

	foreach ($nums as $key => $first_num) {
		$ans_num = $target - $first_num;
		$flag = $key + 1;

		for ($i=$flag; $i < $fruit; $i++) {
			if ($ans_num == $nums[$i]) {
				$ans = array($key, $i);
				return $ans;
			}
		}
	}
}