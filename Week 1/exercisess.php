<?php
//define variable
$arrFirst = [5,2,3,4,1,6];
$arrSecond = [5,3,6,2,9,9];
$arrThird = [43,2,52,8,39,4];

/**
 *
 * Php array exercises
 * 
 * @param array $arrFirst
 * @param array $arrSecond
 * @param array $arrThird
 *
 * @return string
 *
 * @throws LogicException Invalid parameter @param
 */

function ExArray($arrFirst, $arrSecond, $arrThird)
{
	if (is_array($arrFirst) && is_array($arrSecond) && is_array($arrThird)) {
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

		function ArrayMerge($arrFirst, $arrSecond)
		{
			//Adding two records together, the same field will receive the last record of that field
			$arrayMerge = array_merge($arrFirst,$arrSecond);
			//Remove the duplicate value of the array
			$arrayUnique = array_unique($arrayMerge);
			//Convert array to string
			$arrayImplode = implode(",",$arrayUnique);
			return $arrayImplode;
		}

		function ArrayFilter($arr)
		{
			//
			$stringToArray = explode(",", $arr);
			$arrayFilter = array_filter($stringToArray,function($items){
				$stringItems = (string)$items;
				$countString = strlen($stringItems);
				$sumItems = 0;
				if ($countString > 1) {
					for ($i = 0; $i < $countString; $i++) {
						$sumItems += $stringItems[$i];
					}
				}else {
					$sumItems += $stringItems[0];
				}
				if ($sumItems % 2 == 0) {
					return $items;
				}
			});
			$arrayImplode = implode(",",$arrayFilter);
			return $arrayImplode;
		}

		function ArraySort($arrFirst, $arrSecond)
		{
			$stringToArray = explode(",", $arrSecond);
			$arraySort = array_intersect($arrFirst,$stringToArray);
			sort($arraySort);
			$arrayImplode = implode(",",$arraySort);
			return $arrayImplode;
		}
		function ArrayDiffKey($arrFirst, $arrSecond)
		{
			$stringToArray = explode(",", $arrSecond);
			function FilterArrayWalk(&$item, $key, $arrReq)
			{
				foreach ($arrReq as $keyReq=>$value) {
					if ($key == $keyReq && $item != $value) {
						echo $item.",";
					}
				}
			}
			arsort($arrFirst);
			$array_walk = array_walk($arrFirst, "FilterArrayWalk", $stringToArray);
		}

		ArrayIn($arrFirst);
		$arrMerge = ArrayMerge($arrSecond,$arrThird);
		echo "$arrMerge <br>";
		$arrFilter = ArrayFilter($arrMerge);
		echo "$arrFilter <br>";
		$arraySort = ArraySort($arrFirst,$arrMerge);
		echo "$arraySort <br>";
		ArrayDiffKey($arrFirst,$arrMerge);
	} else {
		echo "Invalid parameter ";
		$numargs = func_num_args();
		$arg_list = func_get_args();
		//check location of arguments parameter is not array
		if (!is_array($arg_list[0])) {
			echo "1";
		}
		for ($i = 1; $i < $numargs; $i++) {
			if (!is_array($arg_list[$i])) {
				$locationArg = $i + 1;
				echo ",$locationArg";
			}
		}
	}
}

ExArray($arrFirst,$arrSecond,$arrThird);