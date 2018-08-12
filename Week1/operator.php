<?php 
/**
 * Operator Compare differences between operator == and operator ===
 * 
 * @param string $valueFirst
 * @param string $valueSecond
 *
 * @return void True or False
 */
function Operator($valueFirst, $valueSecond)
{
    /*Operator ==*/
    echo "Operator ==:<br/>";

    if ($valueFirst == $valueSecond) {
        echo "True";
    } else {
        echo "False";
    }

    /*Operator ===*/
    echo "<br/>Operator ===:<br/>";

    if ($valueFirst === $valueSecond) {
        echo "True";
    } else {
        echo "False";
    }
}
