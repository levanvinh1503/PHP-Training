<?php 
// define constant SIZE = 100
define('SIZE', '100');

// define string with multiple lines
$varString = <<<STRING
Hello word <br/>
Hello all <br/>
STRING;
// define list three variable
list($varFirstEx, $varSecondEx, $varThirdEx) = ["First Variable", "Second Variable", "Third Variable"];

echo "Example String with multiple lines: <br/> $varString";
echo "Example list variable: <br/>";
echo "1: $varFirstEx <br/>";
echo "2: $varSecondEx <br/>";
echo "3: $varThirdEx <br/>";
echo "Example define constant: <br/>" . constant('SIZE');
echo "<hr/>"
?>

<?= 
//show result with short tag
"Show result with short tag: <br/>
Example String with multiple lines: <br/>
.$varString.
Example list variable:  <br/>
1: $varFirstEx <br/>
2: $varSecondEx  <br/>
3: $varThirdEx <br/>
Example define constant:  <br/>
" . constant('SIZE')

?>
