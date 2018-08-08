<?php
/**
 * FindString Find the string in the string
 * 
 * @param string $stringInput
 * @param string $subString
 *
 * @return bool true or false
 *
 * @throws LogicExeption Invalid parameter
 */
function FindString($stringInput, $subString)
{
    //check $string and $subString is string
    if (is_string($stringInput) && is_string($subString)) {
        if (strpos($stringInput, $subString)) {
            return true;
        } else {
            return false;
        }
    } else {
        echo "Invalid parameter";
    }
}
