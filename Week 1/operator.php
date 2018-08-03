<?php 
//Ex Comparison between == and ===
$varStringFirst = 100;
$varStringSecond = "100";

//Operator ==
echo "Operator == of 100 and '100':<br/>";
if ($varStringFirst == $varStringSecond) {
	echo "True";
}else{
	echo "False";
}
//Operator ===
echo "<br/>Operator === of 100 and '100':<br/>";
if ($varStringFirst === $varStringSecond) {
	echo "True";
}else{
	echo "False";
}