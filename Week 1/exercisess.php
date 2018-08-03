<?php
//define variable
$arrFirst = [];
$arrSecond = [];
$arrThird = [];

/**
 * 
 * 
 * @param array $arrFirst
 * @param array $arrSecond
 * @param array $arrThird
 *
 * @return TRUE if it finds the number 1 in the array
 * @return TRUE if it finds the number 1 in the array
 *
 * @throws LogicException Invalid parameter
 */

function ExArray($arrFirst, $arrSecond, $arrThird)
{
	function ArrayIn($arr)
	{
		//Check the value for the array
		$arrayIn = in_array(1, $arr);
		if ($arrayIn) {
			echo "Found <br>";
		}else {
			echo "Not found <br>";
		}
	}
	function ArrayMergeRecursive($arrFirst, $arrSecond)
	{
		//Adding two records together, the same field will receive the last record of that field
		$arrayMerge = array_merge_recursive($arrFirst,$arrSecond);
		
	}
}