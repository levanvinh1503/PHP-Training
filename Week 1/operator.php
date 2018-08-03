<?php 
//Ex Comparison between == and ===
$varStringOne = 100;
$varStringTwo = "100";

//Operator ==
if ($varStringOne == $varStringTwo) {
	echo "True";
}else{
	echo "False";
}
//Operator ===
if ($varStringOne === $varStringTwo) {
	echo "True";
}else{
	echo "False";
}