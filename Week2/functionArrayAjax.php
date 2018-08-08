<?php
if (isset($_POST["arrayNumber"])) {
    /**
     * SumAndMultiValueArray Sum and multiplicative the values of array
     * 
     * @param string $stringInput
     *
     * return void List the key and the value of array
     */
    function SumAndMultiValueArray($stringInput)
    {
        //convert string to array
        $arrayString = explode(",", $stringInput);
        $arrayResult = array();
        $sumValueArray = 0;
        $multiValueArray = 1;
        foreach ($arrayString as $keyArray => $valueArray) {
            $sumValueArray += $valueArray;
            $multiValueArray *= $valueArray;
        }
        //Add value $multiValueArray to array
        array_unshift($arrayResult, $multiValueArray);
        //Add value $sumValueArray to array
        array_unshift($arrayResult, $sumValueArray);
        //Encode array
        $encodeArray = json_encode($arrayResult);
        //Decode array
        $decodeArray = json_decode($encodeArray);
        print_r($decodeArray);
    }

    //called function
    SumAndMultiValueArray($_POST["arrayNumber"]);
} else {
    echo "Error";
}
