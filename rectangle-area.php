Area of rectangle

<html>
<head>
<title>area of rectangle</title>
</head>
<body>
<form method="get" action="rectangle-area.php">
enter length:<input type="text" name="txtl"><br><br>
enter breadth:<input type="text" name="txtb"><br><br>
<input type="submit" name="btn" value="calculate">
</form>
</body>
</html>
<?php
$l=$b=" ";
if(isset($_GET["btn"]))
{
$l=$_GET["txtl"];
$b=$_GET["txtb"];
$a=$l*$b;
echo "area is:".$a;
}
?>