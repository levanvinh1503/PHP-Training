<?php
/**
 * FindString Find the string in the string
 * 
 * @param string $string
 * @param string $subString
 *
 * @return bool true or false
 *
 * @throws LogicExeption Invalid parameter
 */
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

//called function
