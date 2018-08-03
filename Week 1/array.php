<?php
//define variable
$arr = ["Bút bi","Bút chì","Bút mực","Bút dạ quang"];
$arrDiff = ["Bút","Bút chì","Bút mực","Bút dạ"];
$arrNumber = ["2","2","3","4","5","6"];
$arrNumberPlus = ["1","1","1","3","2","1"];
$str = "HP,Dell,Asus,Lenovo";
$arrField = array(
	"ID" => "1",
	"Name" => "LVV",
	"Phone" => "0123456789"
);
$arrFieldDiff = array(
	"ID" => "1",
	"PassWord" => "123456708",
	"Phone" => "012345678"
);

//define functions add value to array arr
function ArrayUnShift($arr)
{
	//add value to array arr
	array_unshift($arr, "Bút dạ quang");
	//iterate array arr
	foreach ($arr as $key=>$value) {
		echo "$key => $value ";
	}
}

//define functions sort array arr
function ArraySort($arr)
{
	//sort array arr
	foreach ($arr as $key=>$value) {
		echo "$key => $value ";
	}
}

//define functions delete duplicated value in array arr
function ArrayDeleteDuplicated($arr)
{
	//delete duplicated value in array arr
	$deleteArray = array_unique($arr);
	foreach ($deleteArray as $key=>$value) {
		echo "$key => $value ";
	}
}

//define function convert array to string
function ArrayImplode($arr)
{
	//convert array to string
	$arrayToString = implode(" - ", $arr);
	echo $arrayToString;
}

//define function convert string to array
function ArrayExplode($str)
{
	//convert string to array
	$stringToArray = explode(",", $str);
	foreach ($stringToArray as $key=>$value) {
		echo "$key => $value ";
	}
}

//define function select field of array
function ArrayKeys($arr)
{
	//select field of array
	$arrayKey = array_keys($arr);
	foreach ($arrayKey as $key=>$value) {
		echo "$key => $value ";
	}
}

//define function select record of array
function ArrayValues($arr)
{
	//select record of array
	$arrayInput = array_values($arr);
	foreach ($arrayInput as $key=>$value) {
		echo "$key => $value ";
	}
}

//define function Check the value for the array
function ArrayIn($arr, $value)
{
	//Check the value for the array
	$arrayIn = in_array($value, $arr);
	if ($arrayIn) {
		echo "True";
	}else {
		echo "False";
	}
}

//define function Check the field name for the array
function ArrayKeyExit($arr, $value)
{
	//Check the field name for the array
	$arrayKeyExit = array_key_exists($value, $arr);
	if ($arrayKeyExit) {
		echo "True";
	}else {
		echo "False";
	}
}

//define function Get and delete the first value of the array
function ArrayShift($arr)
{
	//Get and delete the first value of the array
	array_shift($arr);
	foreach ($arr as $key=>$value) {
		echo "$key => $value ";
	}
}

//define function Get and delete the last value of the array
function ArrayPop($arr)
{
	//Get and delete the last value of the array
	array_pop($arr);
	foreach ($arr as $key=>$value) {
		echo "$key => $value ";
	}
}

//define function Get different values of 2 arrays
function ArrayDiff($arrFirst, $arrSecond)
{
	//Get different values of 2 arrays
	$arrayDiff = array_diff($arrFirst, $arrSecond);
	print_r($arrayDiff);
}

//define function Get different the first values of 2 arrays
function ArrayDiffKey($arrFirst, $arrSecond)
{
	//Get different the first values of 2 arrays
	$arrayDiffKey = array_diff_key($arrFirst, $arrSecond);
	print_r($arrayDiffKey);
}

//define function Get values of two arrays including field values and records
function ArrayIntersect($arrFirst, $arrSecond)
{
	//Get values of two arrays including field values and records
	$arrayIntersect = array_intersect($arrFirst, $arrSecond);
	print_r($arrayIntersect);
}

//define function Get the first values of two arrays including field values and records
function ArrayIntersectKey($arrFirst, $arrSecond)
{
	//Get the first values of two arrays including field values and records
	$arrayIntersectKey = array_intersect_key($arrFirst, $arrSecond);
	print_r($arrayIntersectKey);
}

//define function Adding two records together, the same field will receive the last record of that field
function ArrayMerge($arrFirst, $arrSecond)
{
	//Adding two records together, the same field will receive the last record of that field
	$arrayMerge = array_merge($arrFirst,$arrSecond);
	print_r($arrayMerge);
}

//define function Add two arrays together, field overlap, this field will be an array of records of 2 tables
function ArrayMergeRecursive($arrFirst, $arrSecond)
{
	//Add two arrays together, field overlap, this field will be an array of records of 2 tables
	$arrayMergeRecursive = array_merge_recursive($arrFirst,$arrSecond);
	print_r($arrayMergeRecursive);
}

//define function Adding two records together, the same field will receive the first record of that field
function ArrayPlusArray($arrFirst, $arrSecond)
{
	//Adding two records together, the same field will receive the first record of that field
	$arrayPlusArray = $arrFirst + $arrSecond;
	print_r($arrayPlusArray);
}

//define function Filter the values in the table
function ArrayFilter($arr)
{
	//Filter the values in the table
	$arrayFilter = array_filter($arr, function($result){
		return $result < 4 ;
	});

	print_r($arrayFilter);
}

//define function ArrayMap
function ArrayMap($arr, $arrPlus)
{
	function FilterArrayMap(&$itemArr, $arrPlusRequest)
	{
		$result = $itemArr + $arrPlusRequest;
		return "$result <br />";
	}
	//Repeats all elements of the array and passes to the predefined callback function of the user. The callback function handles parts of the array as parameters and it will repeat until all the elements of the array have been passed.
	$arrayMap = array_map("FilterArrayMap", $arr, $arrPlus);
	print_r($arrayMap);
}

//define function ArrayWalk
function ArrayWalk($arr, $valueInput)
{
	function FilterArrayWalk(&$item, $key, $valueRequest)
	{
		$result = $item + $valueRequest;
		echo "$item ~ $result <br>";
	}
	//Repeats all elements of the array and passes to the predefined callback function of the user. The callback function handles portions of the array as parameters and it will repeat until all elements of the array have been moved and custom variables are added.
	array_walk($arr, 'FilterArrayWalk',$valueInput);
}

//called functions
ArrayWalk($arrNumber, "3");