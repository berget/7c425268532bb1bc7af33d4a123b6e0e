<?php
/**
 *
 * @authors rewrite (you@example.org)
 * @date    2018-06-20 01:25:50
 * @version $Id$
 */

require('src/peakIndexInMountainArray.php');
use PHPUnit\Framework\TestCase;

class Leetcode_Easy_852_Test extends TestCase {

	/**
	* @dataProvider arrayProvider
	*/
	function testPeakIndexInMountainArray($A, $answer) {
		$data = peakIndexInMountainArray($A);

		$this->assertEquals($answer, $data);
	}

	function arrayProvider(){
		return [
			[	[0, 1, 0], 1 ],
			[	[0, 1, 1, 2, 0], 3	],
			[	[0, 1, 2, 1, 3, 1, 0], 4	],
		];
	}
}