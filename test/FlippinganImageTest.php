<?php
/**
 * Flipping an Image TEST
 * @authors rewrite (you@example.org)
 * @date    2018-06-20 19:46:21
 * @version $Id$
 */



require('src/FlippinganImage.php');
use PHPUnit\Framework\TestCase;

class Leetcode_Easy_832_Test extends TestCase {
	/**
	* @dataProvider arrayProvider
	*/
	function testflipAndInvertImage($A, $answer){
		// call fun
		$data = flipAndInvertImage($A);
		$this->assertEquals($answer, $data);
	}

	function arrayProvider(){
		return [
			[	[[1,1,0],[1,0,1],[0,0,0]], [[1,0,0],[0,1,0],[1,1,1]] ],
			[	[[1,1,0,0],[1,0,0,1],[0,1,1,1],[1,0,1,0]], [[1,1,0,0],[0,1,1,0],[0,0,0,1],[1,0,1,0]] ],
			// [	[0, 1, 2, 1, 3, 1, 0], 4	],
		];
	}
}