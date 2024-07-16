<html>
<head></head>
<body>
<form method="get" action="largest-number.php">
enter first number:<input type="text" name="n1"><br><br>
enter second number:<input type="text" name="n2"><br><br>
enter third number:<input type="text" name="n3"><br><br>
<input type="submit" name="btn" value="result">
</form>
</body>
</html>
<?php
if(isset($_GET["btn"]))
{
$n=$_GET["n1"];
$x=$_GET["n2"];
$y=$_GET["n2"];
if($n>$x && $n>$y)
{
echo $n." is largest number";
}
else if($x>$n && $x>$y)
{
echo $x.' is largest number';
}
else
{
echo $y.' is largest number';
}
}
?>
