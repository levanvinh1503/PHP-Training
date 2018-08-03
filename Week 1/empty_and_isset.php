<?php
// empty return true
if (empty($varFirst)) {
	echo "true";
} else {
	echo "false";
}
// empty return false
$varSecond = 10;
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
$varFour = "";
if (isset($varFour)) {
	echo "true";
}else {
	echo "false";
}
