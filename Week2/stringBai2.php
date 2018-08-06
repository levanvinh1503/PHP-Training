<?php
//define function find $subString in $string
function FindString($string, $subString)
{
	//check $string and $subString is string
	if (is_string($string) && is_string($subString)) {
		if (strpos($string,$subString)) {
			return true;
		}else {
			return false;
		}
	} else {
		echo "Invalid parameter ";
	}
}
