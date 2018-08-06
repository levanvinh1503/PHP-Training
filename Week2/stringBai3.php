<?php
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