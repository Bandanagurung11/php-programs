

<html>
<head>
<title>area of rectangle</title>
</head>
<body>
<form method="get" action="simple-interest.php">
principal:<input type="text" name="txtp"><br><br>
rate:<input type="text" name="txtr"><br><br>
time:<input type="text" name="txtt"><br><br>
<input type="submit" name="btn" value="calculate">
</form>
</body>
</html>


<?php
$p=$t=$r=" ";
if(isset($_GET["btn"]))
{
$p=$_GET["txtp"];
$r=$_GET["txtr"];
$t=$_GET["txtt"];
$si=$p*$t*$r/100;
echo "simple interest is:".$si;
}
?>