<?php
/**
 * 852. Peak Index in a Mountain Array
 * @authors rewrite
 * @date    2018-06-19 20:33:17
 * @version $Id$
 */

function peakIndexInMountainArray($A) {
	$max = 0;
	$index = 0;
	foreach ($A as $key => $value) {
		if ($max < $value) {
			$max = $value;
			$index = $key;
		}
	}

	return $index;
}