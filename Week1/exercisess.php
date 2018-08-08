<?php
/**
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
    //check is array
    if (is_array($arrFirst) && is_array($arrSecond) && is_array($arrThird)) {
        /**
         * ArrayIn Check the value 1 in the array
         * 
         * @param array $arrayInput
         *
         * @return void Found or Not found
         */
        function ArrayIn($arrayInput)
        {
            //Check the value for the array
            $arrayIn = in_array(1, $arrayInput);
            if ($arrayIn) {
                echo "Found <br>";
            } else {
                echo "Not found <br>";
            }
        }

        /**
         * ArrayMerge Merge two array and remove the duplicate value of the array
         * 
         * @param array $arrFirst
         * @param array $arrSecond
         *
         * @return string
         */
        function ArrayMerge($arrFirst, $arrSecond)
        {
            //Adding two records together, the same field will receive the last record of that field
            $arrayMerge = array_merge($arrFirst, $arrSecond);
            //Remove the duplicate value of the array
            $arrayUnique = array_unique($arrayMerge);
            //Convert array to string
            $arrayImplode = implode(",", $arrayUnique);
            return $arrayImplode;
        }

        /**
         * ArrayFilter Filter the value have sum the digits of a number divisible by 2
         * 
         * @param array $arrayInput
         *
         * @return string
         */
        function ArrayFilter($arrayInput)
        {
            $stringToArray = explode(",", $arrayInput);
            $arrayFilter = array_filter($stringToArray, function ($itemsArray) {
                $stringItems = (string)$itemsArray;
                $countString = strlen($stringItems);
                $sumItems = 0;
                if ($countString > 1) {
                    for ($listItem = 0; $listItem < $countString; $listItem++) {
                        $sumItems += $stringItems[$listItem];
                    }
                } else {
                    $sumItems += $stringItems[0];
                }
                if ($sumItems % 2 == 0) {
                    return $itemsArray;
                }
            });
            $arrayImplode = implode(",", $arrayFilter);
            return $arrayImplode;
        }

        /**
         * ArraySort Sort the values of array 1 that it exists in array 2
         * 
         * @param array $arrFirst
         * @param array $arrSecond
         *
         * @return string
         */
        function ArraySort($arrFirst, $arrSecond)
        {
            $stringToArray = explode(",", $arrSecond);
            $arraySort = array_intersect($arrFirst, $stringToArray);
            sort($arraySort);
            $arrayImplode = implode(",", $arraySort);
            return $arrayImplode;
        }

        /**
         * ArrayDiffKey The array value of array 1 with its key does not exist in array 2
         * 
         * @param array $arrFirst
         * @param array $arrSecond
         *
         * @return void
         */
        function ArrayDiffKey($arrFirst, $arrSecond)
        {
            //conver array to string
            $stringToArray = explode(",", $arrSecond);

            /**
             * FilterArrayWalk
             * 
             * @param string &$item
             * @param string $key
             * @param array $arrReq
             *
             * @return void
             */
            function FilterArrayWalk(&$itemsArray, $keyArray, $arrReq)
            {
                foreach ($arrReq as $keyReq => $valueReq) {
                    if ($keyArray == $keyReq && $itemsArray != $valueReq) {
                        echo $itemsArray.",";
                    }
                }
            }
            arsort($arrFirst);
            $array_walk = array_walk($arrFirst, "FilterArrayWalk", $stringToArray);
        }

        //Called function
        ArrayIn($arrFirst);
        $arrMerge = ArrayMerge($arrSecond, $arrThird);
        echo "$arrMerge<br>";
        $arrFilter = ArrayFilter($arrMerge);
        echo "$arrFilter<br>";
        $arraySort = ArraySort($arrFirst, $arrMerge);
        echo "$arraySort<br>";
        ArrayDiffKey($arrFirst, $arrMerge);
    } else {
        echo "Invalid parameter ";
        $numberArguments = func_num_args();
        $listArguments = func_get_args();
        //check location of arguments parameter is not array
        if (!is_array($listArguments[0])) {
            echo "1";
        }
        for ($valueList = 1; $valueList < $numberArguments; $valueList++) {
            if (!is_array($listArguments[$valueList])) {
                $locationArg = $valueList + 1;
                echo ", $locationArg";
            }
        }
    }
}
