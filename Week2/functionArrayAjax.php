<?php
if (isset($_POST["arrayNumber"])) {
    /**
     * SumAndMultiValueArray Sum and multiplicative the values of array
     * 
     * @param string $string
     *
     * return void List the key and the value of array
     */
    function SumAndMultiValueArray($string)
    {
        //convert string to array
        $array = explode(",", $_POST["arrayNumber"]);
        $arrayResult = array();
        $sumValueArray = 0;
        $multiValueArray = 1;
        foreach ($array as $key=>$value) {
            $sumValueArray += $value;
            $multiValueArray *= $value;
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
