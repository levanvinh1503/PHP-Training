<?php
//define single qoute string 
$singleQouteString = '$Helloword';
//define double qoute string
$doubleQouteString = "\$Helloword";
//define 
//substring
$subString = substr($doubleQouteString, 1,5);
//find string in string
$findString = strpos($singleQouteString, 'He');

echo $singleQouteString . "<br>";
echo $doubleQouteString . "<br>";
echo 'Single qoute string: '.$singleQouteString . $doubleQouteString . '<br>';
echo "Double qoute string: $singleQouteString $doubleQouteString <br>";
echo $subString;