

<html>
<head></head>
<body>
<form method="get" action="cube-of-number.php">
enter number:<input type="text" name="n1"><br><br>
<input type="submit" name="btn" value="show">
</form>
</body>
</html>

<?php
if(isset($_GET["btn"]))
{
$x=$_GET["n1"];
function cube($y)
{
$cube=$y*$y*$y;
echo "number is $cube <br>";
}
cube($x);
}
?>