sum of two number

<html>
<head>
<title>sum</title>
</head>
<body>
<form method="get" action="sum.php">
first number:<input type="text" name="n1"><br><br>
second number:<input type="text" name="n2"><br><br>
<input type="submit" value="sum" name="sum">
</form>
</body>
</html>
<?php
if(isset($_GET["sum"]))
{
$a=$_GET["n1"];
$b=$_GET["n2"];
$sum=$a+$b;
echo "sume is:". $sum;
}
?>