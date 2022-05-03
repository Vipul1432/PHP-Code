<?php
$var1 = "6th CE";
$arr = array("data1","data2","data3");

for($i = 0; $i<3; $i++)
{
	echo "Hello World...".$var1."<br/>";
	echo $arr[$i]."<br/>";
}

?>
<script type="text/javascript">
var i=0;
for(i=0; i<10; i++)
{
	document.write("Hi there...");
}
</script>

<?php
$marks = array("Data1", "Data2", "Data3");
$marks[3] = "Data4";
$marks[4] = "Data5";
for($i=0; $i<count($marks); $i++)
{
	echo $marks[$i]."<br/>";
}
?>
