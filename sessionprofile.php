<?php
$con=mysqli_connect("localhost","wt","wt","wt");
$uname=$_POST['uname'];
$pwd = $_POST['pwd'];
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = "SELECT * FROM user WHERE uname='$uname'";
$result = mysqli_query($con, $query);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
$dbpwd = $row['pwd'];
$uname = $row['uname'];
}
if(md5($pwd)==$dbpwd)
{
session_start();
$_SESSION['uname']=$uname;
header("Location: sessionsetDestroy.php");
}
else
{
header("Location: sessionlogin.php");
}
?>
