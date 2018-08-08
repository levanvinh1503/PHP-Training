<?php
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
    } else {
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

    for ($itemArray = 0; $itemArray < $varNumArray; $itemArray++) {
        echo "$itemArray<br/>";
    }

    //demo foreach
    echo "Demo foreach";

    foreach ($varListArray as $keyArray => $valueArray) {
        echo "$keyArray => $valueArray <br/>";
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
            echo "First case, with break !";
            break;
        case 1:
            echo "Second case, with break !";
            break;
        default:
            echo "Empty";
            break;
    }
}
