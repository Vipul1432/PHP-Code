<?php
setcookie("user", "Mef", time()+3600);
?>
<?php
$expire=time()+60*60*24*30;
setcookie("user", "jack", $expire);
?>
