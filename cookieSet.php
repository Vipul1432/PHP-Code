<html>
<body>
<?php
if (isset($_COOKIE["user"]))
echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
echo "Welcome guest!<br />";
?>
</body>
</html>
