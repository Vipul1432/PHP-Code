<?php
$x = 5;
$y = 8;

var_dump($x === $y); // returns false because types are not equal
?>

<?php
$x = 100;
$y = "100";

var_dump($x != $y); // returns false because values are equal
?>
