

<html>
<head></head>
<body>
<form action="setsession.php" method="get">
enter name:<input type="text" name="txtn"><br>
<input type="submit" name="btn" value="set">
</form>
</body>
</html>

<?php
session_start();
if(isset($_GET["btn"]))
{
$_SESSION["name"]=$_GET["txtn"];
echo " session is set <br>";
}
echo "session value is ".$_SESSION["name"];
?>