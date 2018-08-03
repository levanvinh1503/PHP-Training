<?php
//define variable
$varFirst= null;
$varSecond = 10;
$varThird = null;
$varFour = "";

//define function emptyisset
function EmptyIsset($varFirst, $varSecond, $varThird, $varFour)
{
	// empty return true
	if (empty($varFirst)) {
		echo "true";
	} else {
		echo "false";
	}
	// empty return false
	if (empty($varSecond)) {
		echo "true";
	} else {
		echo "false";
	}
	// isset return false
	if (isset($varThird)) {
		echo "true";
	}else {
		echo "false";
	}
	// isset return true
	if (isset($varFour)) {
		echo "true";
	}else {
		echo "false";
	}
}

//called function emptyisset
EmptyIsset($varFirst, $varSecond, $varThird, $varFour);

