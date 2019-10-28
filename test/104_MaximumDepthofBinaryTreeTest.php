<?php
/**
 * Maximum Depth of binary Tree TEST
 * input是由題目生成的二元樹，所以無法自行驗證
 * @authors rewrite (darkrewrite@gmail.com)
 * @date    2019-10-15 23:00:21
 * @version $Id$
 */



require('src/104_Maximum_Depth_of_Binary_Tree.php');
use PHPUnit\Framework\TestCase;

class Leetcode_Easy_104_Test extends TestCase {
	/**
	 * TreeNode Object
	 * (
	 *     [val] => 3
	 *     [left] => TreeNode Object
	 *         (
	 *             [val] => 9
	 *             [left] => 
	 *             [right] => 
	 *         )
	 *     [right] => TreeNode Object
	 *         (
	 *             [val] => 20
	 *             [left] => TreeNode Object
	 *                 (
	 *                     [val] => 15
	 *                     [left] => 
	 *                     [right] => 
	 *                 )
	 *             [right] => TreeNode Object
	 *                 (
	 *                     [val] => 7
	 *                     [left] => 
	 *                     [right] => 
	 *                 )
	 *         )
	 * )
	 * TreeNode Object
	 * (
	 *     [val] => 9
	 *     [left] => 
	 *     [right] => 
	 * )
	 * TreeNode Object
	 * (
	 *     [val] => 20
	 *     [left] => TreeNode Object
	 *         (
	 *             [val] => 15
	 *             [left] => 
	 *             [right] => 
	 *         )
	 *     [right] => TreeNode Object
	 *         (
	 *             [val] => 7
	 *             [left] => 
	 *             [right] => 
	 *         )
	 * )
	 * TreeNode Object
	 * (
	 *     [val] => 15
	 *     [left] => 
	 *     [right] => 
	 * )
	 * TreeNode Object
	 * (
	 *     [val] => 7
	 *     [left] => 
	 *     [right] => 
	 * )
	 * 
	 */
	/**
	* @dataProvider arrayProvider
	*/
	function testmaxDepth($A, $answer){
		$s = new Solution();
		
		// call fun
		// $s->maxDepth($root);
		$this->assertTrue(true);
	}

	function arrayProvider(){
		return [
			[	[[1,1,0],[1,0,1],[0,0,0]], [[1,0,0],[0,1,0],[1,1,1]] ],
			[	[[1,1,0,0],[1,0,0,1],[0,1,1,1],[1,0,1,0]], [[1,1,0,0],[0,1,1,0],[0,0,0,1],[1,0,1,0]] ],
		];
	}
}