<?php
/**
 * String Check the string is single byte, multiple byte
 * 
 * @param string $myStr
 *
 * @return bool true or false
 */
function StringByte($myStr)
{
    if (strlen($myStr) == mb_strlen($myStr)) {
        return false;
    } else {
        return true;
    }
}
