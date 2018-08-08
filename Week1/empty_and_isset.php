<?php
/**
 * EmptyIsset Check 
 * 
 * @param string $varFirst
 *
 * @return void return true or false
 */
function EmptyIsset($varFirst)
{
    if (empty($varFirst)) {
        echo "true";
    } else {
        echo "false";
    }
    
    if (isset($varFirst)) {
        echo "true";
    } else {
        echo "false";
    }
}
