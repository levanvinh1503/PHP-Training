<?php
//define variable
$varNumFirst = 20;
$varNumSecond = 10;
$varNumArray = 5;
$varListArray = ["Bút mực","Bút chì","Bút bi","Bút dạ quang"];
$varSwitch = 1;

/**
 * IfLoop Example if/loop
 * 
 * @param string $varNumFirst 
 * @param string $varNumSecond
 * @param string $varNumArray 
 * @param array $varListArray
 * @param string $varSwitch   
 *
 * @return string
 */
function IfLoop($varNumFirst, $varNumSecond, $varNumArray, $varListArray, $varSwitch)
{
    // demo if, else
    echo "Demo if, else";
    if ($varNumFirst > $varNumSecond) {
        echo "$varNumFirst lớn hơn $varNumSecond";
    }else {
        echo "$varNumFirst nhỏ hơn $varNumSecond";
    }
    //demo if, elseif
    echo "Demo if, elseif <br>";
    if ($varNumFirst > $varNumSecond) {
        echo "Số lớn hơn là $varNumFirst<br>";
    } elseif ($varNumSecond > $varNumFirst) {
        echo "Số lớn hơn là $varNumSecond<br>";
    }
    //demo ternary operator
    echo "Demo ternary operator <br/>";
    $retVal = ($varNumFirst > $varNumSecond) ? $varNumFirst : $varNumSecond;
    echo "Giữa $varNumFirst và $varNumSecond thì $retVal lớn hơn ! <br/>";
    //demo for
    echo "Demo for <br/>";
    for ($i = 0; $i < $varNumArray; $i++) {
        echo "$i <br/>";
    }
    //demo foreach
    echo "Demo foreach";
    foreach ($varListArray as $value) {
        echo "$value <br/>";
    }
    //demo while
    echo "Demo while <br>";
    while ($varNumArray > 0) {
        echo "$varNumArray - ";
        $varNumArray--;
    }
	//demo do...while
    echo "<br>Demo do...while <br>";
    do {
        echo "$varNumArray > ";
        $varNumArray++;
    } while ($varNumArray < 10);
    //demo switch
    echo "<br>Demo switch <br>";
    switch ($varSwitch) {
        case 0:
        echo "Bút bi";
        break;
        case 1:
        echo "Bút chì";
        break;
        default:
        echo "Trống";
        break;
    }
}

//called function ifloop
IfLoop($varNumFirst, $varNumSecond, $varNumArray, $varListArray, $varSwitch);
