
<html>
<head></head>
<body>
<form method="get" action="prime-or-not.php">
enter number:<input type="text" name="n1"><br><br>
<input type="submit" name="btn" value="result">
</form>
</body>
</html>

<?php
$dc=0;
if(isset($_GET["btn"]))
{
$n=$_GET["n1"];
for($i=2; $i<$n; $i++)
{
if($n%$i==0)
{
$dc++;
break;
}
}
if($dc==0)
{
echo $n. ' is prime';
}
else
{
echo $n. '  is not prime';
}
}
?>