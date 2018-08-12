<?php
/**
 * ArrayUnShift Add value to array
 *
 * @param array $arrayInput
 * @param string $valueCheck
 *
 * @return void List the key and the value of the array
 */
function ArrayUnShift($arrayInput, $valueCheck)
{
    /*add value to array arrayInput*/
    array_unshift($arrayInput, $valueCheck);
    /*iterate array $arrayInput*/
    foreach ($arrayInput as $keyArray => $valueArray) {
        echo "$keyArray => $valueArray";
    }
}

/**
 * ArraySort Sort array
 *
 * @param array $arrayInput
 *
 * @return void List the key and the value of the array
 */
function ArraySort($arrayInput)
{
    /*sort array arrayInput*/
    foreach ($arrayInput as $keyArray => $valueArray) {
        echo "$keyArray => $valueArray";
    }
}

/**
 * ArrayDeleteDuplicated Delete duplicated value in array
 * 
 * @param array $arrayInput
 *
 * @return void List the key and the value of the array
 */
function ArrayDeleteDuplicated($arrayInput)
{
    /*delete duplicated value in array $arrayInput*/
    $deleteArray = array_unique($arrayInput);
    foreach ($deleteArray as $keyArray => $valueArray) {
        echo "$keyArray => $valueArray";
    }
}

/**
 * ArrayImplode Convert array to string
 * 
 * @param array $arrayInput
 *
 * @return void
 */
function ArrayImplode($arrayInput)
{
    /*convert array to string*/
    $arrayToString = implode(" - ", $arrayInput);
    echo $arrayToString;
}

/**
 * 
 * ArrayExplode Convert string to array
 * 
 * @param string $stringInput
 *
 * @return void List the key and the value of the array
 */
function ArrayExplode($stringInput)
{
    /*convert string to array*/
    $stringToArray = explode(",", $stringInput);
    foreach ($stringToArray as $keyArray => $valueArray) {
        echo "$keyArray => $valueArray";
    }
}

/**
 * 
 * ArrayKeys List of array fields
 * 
 * @param array $arrayInput
 *
 * @return void List the key and the value of the array
 */
function ArrayKeys($arrayInput)
{
    /*select field of array*/
    $arrayKey = array_keys($arrayInput);
    foreach ($arrayKey as $keyArray => $valueArray) {
        echo "$keyArray => $valueArray";
    }
}

/**
 * 
 * ArrayValues List of array record
 * 
 * @param array $arrayInput
 *
 * @return void List the key and the value of the array
 */
function ArrayValues($arrayInput)
{
    /*select record of array*/
    $arrayInput = array_values($arrayInput);
    foreach ($arrayInput as $keyArray => $valueArray) {
        echo "$keyArray => $valueArray";
    }
}

/**
 * 
 * ArrayIn Check the value in the array
 * 
 * @param array $arrayInput  
 * @param string $valueCheck
 *
 * @return void True or False
 */
function ArrayIn($arrayInput, $valueCheck)
{
    /*Check the value in the array*/
    $arrayIn = in_array($valueCheck, $arrayInput);
    if ($arrayIn) {
        echo "True";
    } else {
        echo "False";
    }
}

/**
 * 
 * ArrayKeyExit Check the field name in the array
 * 
 * @param array $arrayInput  
 * @param string $valueCheck
 *
 * @return void True or False
 */
function ArrayKeyExit($arrayInput, $valueCheck)
{
    /*Check the field name for the array*/
    $arrayKeyExit = array_key_exists($valueCheck, $arrayInput);
    if ($arrayKeyExit) {
        echo "True";
    } else {
        echo "False";
    }
}

/**
 * 
 * ArrayShift Get and delete the first value of the array
 * 
 * @param array $arrayInput
 *
 * @return void List the key and the value of the array
 */
function ArrayShift($arrayInput)
{
    /*Get and delete the first value of the array*/
    array_shift($arrayInput);
    foreach ($arrayInput as $keyArray => $valueArray) {
        echo "$keyArray => $valueArray";
    }
}

/**
 * 
 * ArrayPop Get and delete the last value of the array
 * 
 * @param array $arrayInput
 *
 * @return void List the key and the value of the array
 */
function ArrayPop($arrayInput)
{
    /*Get and delete the last value of the array*/
    array_pop($arrayInput);
    foreach ($arrayInput as $keyArray => $valueArray) {
        echo "$keyArray => $valueArray";
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
    /*Get different values of 2 arrays*/
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
    /*Get different the first values of 2 arrays*/
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
    /*Get values of two arrays including field values and records*/
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
    /*Get the first values of two arrays including field values and records*/
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
    /*Add two array, the same field will receive the last record of that field*/
    $arrayMerge = array_merge($arrFirst, $arrSecond);
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
    /*Add two arrays, the same field will be an array of records of 2 tables*/
    $arrayMergeRecursive = array_merge_recursive($arrFirst, $arrSecond);
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
    /*Add two records, the same field will receive the first record of that field*/
    $arrayPlusArray = $arrFirst + $arrSecond;
    print_r($arrayPlusArray);
}

/**
 * 
 * ArrayFilter Filter the values in the table
 * 
 * @param array $arrayInput
 *
 * @return void List the key and the values of the array
 */
function ArrayFilter($arrayInput)
{
    /*Filter the values in the table*/
    $arrayFilter = array_filter($arrayInput, function ($itemArray) {
        return $itemArray < 4;
    });
    print_r($arrayFilter);
}

/**
 * 
 * ArrayMap Use array_map() - The values of array 1 plus the parameter value
 * 
 * @param array $arrayInput
 * @param string $valuePlus
 *
 * @return void List the key and the values of the array
 */
function ArrayMap($arrayInput, $valuePlus)
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
        $resultItem = $itemArr + $valuePlusRequest;
        return "$resultItem <br />";
    }
    $arrayMap = array_map("FilterArrayMap", $arrayInput, $valuePlus);
    print_r($arrayMap);
}

/**
 * 
 * ArrayWalk Use array_walk() - The values of array 1 plus the parameter value 
 * 
 * @param array $arrayInput
 * @param string $valueInput
 *
 * @return void List the key and the values of the array
 */
function ArrayWalk($arrayInput, $valueInput)
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
    function FilterArrayWalk(&$itemArray, $keyArray, $valueRequest)
    {
        $resultItem = $itemArray + $valueRequest;
        echo "$keyArray => $resultItem <br>";
    }
    array_walk($arrayInput, 'FilterArrayWalk', $valueInput);
}
