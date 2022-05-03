<?php
/* These are our valid username and passwords */
$user = 'vipul';
$pass = 'Vipul';

if (isset($_COOKIE['username']) && isset($_COOKIE['password']))
{

    if (($_COOKIE['username'] != $user) || ($_COOKIE['password'] != md5($pass))) {
        header('Location: sessionForm.php');
    } else {
        echo 'Welcome back ' . $_COOKIE['username'];
    }

} else {
    header('Location: sessionForm.php');
}
?>
