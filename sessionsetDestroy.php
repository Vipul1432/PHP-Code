<?php
session_start();
if(!isset($_SESSION['uname']))
{
header('Location: sessionlogin.php');
}
if(isset($_POST['logout']))
{
session_destroy();
header('Location: sessionlogin.php');
}
?>
<html>
<body>
Welcome Mr. <?php echo $_SESSION['uname'];?>
<form method="post">
<input type="submit" name ="logout" value="Logout" />
</form>
