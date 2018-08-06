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

/**
 * 
 * ArrayUnShift Add value to array
 *
 * @param array $arr
 *
 * @return void List the key and the value of the array
 */
function ArrayUnShift($arr)
{
	//add value to array arr
    array_unshift($arr, "Bút dạ quang");
	//iterate array arr
    foreach ($arr as $key=>$value) {
        echo "$key => $value ";
    }
}

/**
 *
 * ArraySort Sort array
 *
 * @param array $arr
 *
 * @return void List the key and the value of the array
 */
function ArraySort($arr)
{
    //sort array arr
    foreach ($arr as $key=>$value) {
        echo "$key => $value ";
    }
}

/**
 * ArrayDeleteDuplicated Delete duplicated value in array
 * 
 * @param array $arr
 *
 * @return void List the key and the value of the array
 */
function ArrayDeleteDuplicated($arr)
{
    //delete duplicated value in array arr
    $deleteArray = array_unique($arr);
    foreach ($deleteArray as $key=>$value) {
        echo "$key => $value ";
    }
}

/**
 * 
 * ArrayImplode Convert array to string
 * 
 * @param array $arr
 *
 * @return void
 */
function ArrayImplode($arr)
{
    //convert array to string
    $arrayToString = implode(" - ", $arr);
    echo $arrayToString;
}

/**
 * 
 * ArrayExplode Convert string to array
 * 
 * @param string $str
 *
 * @return void List the key and the value of the array
 */
function ArrayExplode($str)
{
    //convert string to array
    $stringToArray = explode(",", $str);
    foreach ($stringToArray as $key=>$value) {
        echo "$key => $value ";
    }
}

/**
 * 
 * ArrayKeys List of array fields
 * 
 * @param array $arr
 *
 * @return void List the key and the value of the array
 */
function ArrayKeys($arr)
{
	//select field of array
    $arrayKey = array_keys($arr);
    foreach ($arrayKey as $key=>$value) {
        echo "$key => $value ";
    }
}

/**
 * 
 * ArrayValues List of array record
 * 
 * @param array $arr
 *
 * @return void List the key and the value of the array
 */
function ArrayValues($arr)
{
	//select record of array
    $arrayInput = array_values($arr);
    foreach ($arrayInput as $key=>$value) {
        echo "$key => $value ";
    }
}

/**
 * 
 * ArrayIn Check the value in the array
 * 
 * @param array $arr  
 * @param string $value
 *
 * @return void True or False
 */
function ArrayIn($arr, $value)
{
	//Check the value in the array
    $arrayIn = in_array($value, $arr);
    if ($arrayIn) {
        echo "True";
    }else {
        echo "False";
    }
}

/**
 * 
 * ArrayKeyExit Check the field name in the array
 * 
 * @param array $arr  
 * @param string $value
 *
 * @return void True or False
 */
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

/**
 * 
 * ArrayShift Get and delete the first value of the array
 * 
 * @param array $arr
 *
 * @return void List the key and the value of the array
 */
function ArrayShift($arr)
{
	//Get and delete the first value of the array
    array_shift($arr);
    foreach ($arr as $key=>$value) {
        echo "$key => $value ";
    }
}

/**
 * 
 * ArrayPop Get and delete the last value of the array
 * 
 * @param array $arr
 *
 * @return void List the key and the value of the array
 */
function ArrayPop($arr)
{
	//Get and delete the last value of the array
    array_pop($arr);
    foreach ($arr as $key=>$value) {
        echo "$key => $value ";
    }
}

/**
 * 
 * ArrayDiff Get different values of 2 arrays
 * 
 * @param array $arrFirst
 * @param array $arrSecond
 *
 * @return void List the key and the value of the array
 */
function ArrayDiff($arrFirst, $arrSecond)
{
	//Get different values of 2 arrays
    $arrayDiff = array_diff($arrFirst, $arrSecond);
    print_r($arrayDiff);
}

/**
 * 
 * ArrayDiffKey Get different the first values of 2 arrays
 * 
 * @param array $arrFirst
 * @param array $arrSecond
 *
 * @return void List the key and the value of the array
 */
function ArrayDiffKey($arrFirst, $arrSecond)
{
	//Get different the first values of 2 arrays
    $arrayDiffKey = array_diff_key($arrFirst, $arrSecond);
    print_r($arrayDiffKey);
}

/**
 * 
 * ArrayIntersect Get values of two arrays including field values and records
 * 
 * @param array $arrFirst 
 * @param array $arrSecond
 *
 * @return void List the key and the values of the array
 */
function ArrayIntersect($arrFirst, $arrSecond)
{
	//Get values of two arrays including field values and records
    $arrayIntersect = array_intersect($arrFirst, $arrSecond);
    print_r($arrayIntersect);
}

/**
 * 
 * ArrayIntersectKey Get the first values of two arrays including field values and records
 * 
 * @param array $arrFirst
 * @param array $arrSecond
 *
 * @return void List the key and the values of the array
 */
function ArrayIntersectKey($arrFirst, $arrSecond)
{
	//Get the first values of two arrays including field values and records
    $arrayIntersectKey = array_intersect_key($arrFirst, $arrSecond);
    print_r($arrayIntersectKey);
}

/**
 * 
 * ArrayMerge Add 2 array, the same field will receive the last record of that field
 * 
 * @param array $arrFirst 
 * @param array $arrSecond
 *
 * @return void List the key and the values of the array
 */
function ArrayMerge($arrFirst, $arrSecond)
{
	//Add two array, the same field will receive the last record of that field
    $arrayMerge = array_merge($arrFirst,$arrSecond);
    print_r($arrayMerge);
}

/**
 * 
 * ArrayMergeRecursive Add two arrays, the same field will be an array of records of 2 tables
 * 
 * @param array $arrFirst 
 * @param array $arrSecond
 *
 * @return void List the key and the values of the array
 */
function ArrayMergeRecursive($arrFirst, $arrSecond)
{
	//Add two arrays, the same field will be an array of records of 2 tables
    $arrayMergeRecursive = array_merge_recursive($arrFirst,$arrSecond);
    print_r($arrayMergeRecursive);
}

/**
 * 
 * ArrayPlusArray Add two records, the same field will receive the first record of that field
 * 
 * @param array $arrFirst 
 * @param array $arrSecond
 * 
 * @return void List the key and the values of the array
 */
function ArrayPlusArray($arrFirst, $arrSecond)
{
	//Add two records, the same field will receive the first record of that field
    $arrayPlusArray = $arrFirst + $arrSecond;
    print_r($arrayPlusArray);
}

/**
 * 
 * ArrayFilter Filter the values in the table
 * 
 * @param array $arr
 *
 * @return void List the key and the values of the array
 */
function ArrayFilter($arr)
{
	//Filter the values in the table
    $arrayFilter = array_filter($arr, function($result){
        return $result < 4 ;
    });

    print_r($arrayFilter);
}

/**
 * 
 * ArrayMap Use array_map() - The values of array 1 plus the parameter value
 * 
 * @param array $arr
 * @param string $valuePlus
 *
 * @return void List the key and the values of the array
 */
function ArrayMap($arr, $valuePlus)
{
	/**
	 * 
	 * FilterArrayMap The value of array 1 plus the parameter value
	 * 
	 * @param array &$itemArr
	 * @param string $valuePlusRequest
	 *
	 * @return string The values of the array
	 */
    function FilterArrayMap(&$itemArr, $valuePlusRequest)
    {
        $result = $itemArr + $valuePlusRequest;
        return "$result <br />";
    }
	//
    $arrayMap = array_map("FilterArrayMap", $arr, $valuePlus);
    print_r($arrayMap);
}

/**
 * 
 * ArrayWalk Use array_walk() - The values of array 1 plus the parameter value 
 * 
 * @param array $arr
 * @param string $valueInput
 *
 * @return void List the key and the values of the array
 */
function ArrayWalk($arr, $valueInput)
{
	/**
	 * 
	 * FilterArrayWalk The value of array 1 plus the parameter value 
	 * 
	 * @param string &$item
	 * @param string $key
	 * @param string $valueRequest
	 *
	 * @return void The value old and the value new of the array
	 */
    function FilterArrayWalk(&$item, $key, $valueRequest)
    {
        $result = $item + $valueRequest;
        echo "$item ~ $result <br>";
    }
	//
    array_walk($arr, 'FilterArrayWalk',$valueInput);
}

//called functions
ArrayWalk($arrNumber, "3");
