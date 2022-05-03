<?php
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

print_r($x + $y); // union of $x and $y
echo "<br />";
?>

<?php
$x = array("a" => "red", "b" => "green");
$y = array("a" => "red", "b" => "green");

var_dump($x == $y);
echo "<br />";
?>

<?php
$x = 100;
$y = "100";

var_dump($x <> $y); // returns false because values are equal
echo "<br />";
?>

<?php
$x = 100;
$y = "100";

var_dump($x !== $y); // returns true because types are not equal
echo "<br />";
?>

<?php
$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y
echo "<br />";
?>
<?php
$x = array("a" => "red", "b" => "green");
$y = array("a" => "red", "b" => "green");

var_dump($x == $y);
?>
