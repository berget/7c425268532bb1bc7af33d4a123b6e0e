<?php
/**
 * 771. Jewels and Stones
 *
 * @authors Your Name (you@example.org)
 * @date    2018-06-15 00:45:15
 * @version $Id$
 */


/**
 * @param {string} J
 * @param {string} S
 * @return {number}
 */
function numJewelsInStones($J, $S) {

	$jarr = preg_split('//', $J, -1, PREG_SPLIT_NO_EMPTY);
	$sarr = preg_split('//', $S, -1, PREG_SPLIT_NO_EMPTY);
	$output = 0;
	$jarr_length = count($jarr);
	$sarr_length = count($sarr);

	for ($i=0; $i < $jarr_length; $i++) {
		$checkstr = $jarr[$i];

		for ($y=0; $y < $sarr_length; $y++) {
			if ($checkstr == $sarr[$y]) {
				$output++;
			}
		}
	}
	return $output;
}

?>
