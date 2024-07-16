

<html>
<head></head>
<body>
<form method="get" action="largest-among-two-number.php">
enter first number:<input type="text" name="n1"><br><br>
enter second number:<input type="text" name="n2"><br><br>
<input type="submit" name="btn" value="result">
</form>
</body>
</html>


<?php
if(isset($_GET["btn"]))
{
$n=$_GET["n1"];
$x=$_GET["n2"];
if($n>$x)
{
echo $n." is largest number";
}
else 
{
echo $x.' is largest number';
}
}
?>