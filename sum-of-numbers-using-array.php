<html>
<head></head>
<body>
<form method="get" action="sum-of-numbers-using-array.php">
first number:<input type="text" name="n1"><br><br>
second number:<input type="text" name="n2"><br><br>
third number:<input type="text" name="n3"><br><br>
<input type="submit" name="btn" value="sum">
</form>
</body>
</html>

<?php
if(isset($_GET["btn"]))
{
$x=$_GET["n1"];
$y=$_GET["n2"];
$z=$_GET["n3"];
$numbers=array($x, $y, $z);
$sum = array_sum($numbers);
echo "The sum of the numbers is: " . $sum;
}
?>