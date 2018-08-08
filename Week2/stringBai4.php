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
         * @param string $stringInput
         *
         * @return void
         */
        function SubStringWithTrim($stringInput)
        {
            echo trim($stringInput, "m");
        }

        /**
         * SubStringWithLTrim Removes whitespace or other predefined characters from the left side of a string
         * 
         * @param string $stringInput
         *
         * @return void
         */
        function SubStringWithLTrim($stringInput)
        {
            $strRevString = strrev($stringInput);
            echo ltrim($strRevString, "m");
        }

        //called function
        SubStringWithLTrim($myStr);
    } else {
        echo "Invalid parameter";
    }
}
