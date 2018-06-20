<?php
/**
 * 832. Flipping an Image
 * @authors rewrite (you@example.org)
 * @date    2018-06-20 19:40:56
 * @version $Id$
 */

function flipAndInvertImage($A) {
	$output = array();

  for ($x=0; $x < count($A); $x++) {
  	$two_arr = array();
  	for ($i = (int)(count($A[$x]) - 1); $i >= 0 ; $i--) { 
  		if ($A[$x][$i] == 0) {
  			array_push($two_arr, 1);
  		}else{
  			array_push($two_arr, 0);
  		}
  	}

  	array_push($output, $two_arr);
  }
  return $output;
}