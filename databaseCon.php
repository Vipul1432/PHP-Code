<?php
$con = mysqli_connect("localhost", "wt","wt","wt");

if (mysqli_connect_errno()) {
  echo "Failed to coonnect to Mysql :".my_sqliconnect_error();
}
$newpwd = md5($_POST['pwd']);
$query = "INSERT INTO user(uname, pwd) VALUES ('$_POST[uname]','$newpwd')";
if (mysqli_query($con, $query))
{
  echo "New Record Created Successfully";
} else {
  echo "Error :". "<br />" .mysqli_error($con);
}
 ?>
