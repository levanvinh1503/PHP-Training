<?php
/**
 * Trim String
 *
 * @param [string] $myStr 
 *
 * @return string
 *
 * @throws LogicException Invalid parameter
 */

function TrimString($myStr)
{
	if (is_string($myStr)) {
		function SubStringWithTrim($str)
		{
			echo trim($str, "m");
		}

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