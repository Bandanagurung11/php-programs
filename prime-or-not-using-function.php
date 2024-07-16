
<html>
<head></head>
<body>
<form method="get" action="prime-or-not-using-function.php">
enter number:<input type="text" name="n1"><br><br>
<input type="submit" name="btn" value="result">
</form>
</body>
</html>

<?php
if(isset($_GET["btn"]))
{
$n=$_GET["n1"];
function first($y)
{
$dc=0;
for($i=2; $i<$y; $i++)
{
if($y%$i==0)
{
$dc++;
break;
}
}
if($dc==0)
{
echo $y.' is prime';
}
else
{
echo $y .' is not prime';
}
}
first($n);
}
?>