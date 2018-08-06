<?php
/**
 * Trim String Remove character parameter in the string
 *
 * @param string $myStr 
 *
 * @return void
 *
 * @throws LogicException Invalid parameter
 */

function TrimString($myStr)
{
    if (is_string($myStr)) {
        /**
         * SubStringWithTrim Remove characters from both sides of a string
         * 
         * @param string $str
         *
         * @return void
         */
        function SubStringWithTrim($str)
        {
            echo trim($str, "m");
        }

        /**
         * SubStringWithLTrim Removes whitespace or other predefined characters from the left side of a string
         * 
         * @param string $str
         *
         * @return void
         */
        function SubStringWithLTrim($str)
        {
            $strRevString = strrev($str);
            echo ltrim($strRevString, "m");
        }

        //called function
        SubStringWithLTrim($myStr);
    } else {
        echo "Invalid parameter";
    }
}

//define variable
$string = "trim";

//called function  
TrimString($string);