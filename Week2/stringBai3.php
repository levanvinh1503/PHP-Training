<?php
/**
 * String Check the string is single byte, multiple byte
 * 
 * @param string $myStr
 *
 * @return bool true or false
 */
function String($myStr)
{
    if (strlen($myStr) == mb_strlen($myStr)) {
        return false;
    } else {
        return true;
    }
}
//single byte
String("aaaaa");
//multiple byte
String("Lê văn Vịnh");