

<html>
<head></head>
<body>
<form method="get" action="even-number.php">
enter number:<input type="text" name="n1"><br><br>
<input type="submit" name="btn" value="result">
</form>
</body>
</html>


<?php
if(isset($_GET["btn"]))
{
$n=$_GET["n1"];
if($n%2==0)
{
echo $n." is even number";
}
else 
{
echo $n.' is not even number';
}
}
?>