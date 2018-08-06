<?php 
//define variable
$varStringFirst = 100;
$varStringSecond = "100";

/**
 * Operator Compare differences between operator == and operator ===
 * 
 * @param string $valueFirst
 * @param string $valueSecond
 *
 * @return string true or false
 */
function Operator($valueFirst, $valueSecond)
{
    //Operator ==
    echo "Operator == of 100 and '100':<br/>";
    if ($valueFirst == $valueSecond) {
        echo "True";
    }else{
        echo "False";
    }
    //Operator ===
    echo "<br/>Operator === of 100 and '100':<br/>";
    if ($valueFirst === $valueSecond) {
        echo "True";
    }else{
        echo "False";
    }
}

//Called function Opertor
Operator($varStringFirst,$varStringSecond);
