<?php
//define variable
$varFirst= null;
$varSecond = 10;
$varThird = null;
$varFour = "";

/**
 * EmptyIsset - Check 
 * 
 * @param [string] $varFirst
 *
 * @return string - return true or false
 */
function EmptyIsset($varFirst)
{
    // empty return true
    if (empty($varFirst)) {
        echo "true";
    } else {
        echo "false";
    }
    // isset return false
    if (isset($varFirst)) {
        echo "true";
    }else {
        echo "false";
    }
}

//called function emptyisset
EmptyIsset($varFirst);
