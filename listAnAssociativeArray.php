<?php
$marks = array("Stu1"=>20, "Stu2"=>30, "Stu3"=>40);
echo "<table border='1'>";
while(list($key, $value)=each($marks))
{
echo "<tr><td>$key</td><td>$value</td></tr>\n";
}
echo "</table>";
?>
