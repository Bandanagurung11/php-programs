Calculation of simple interest

<html>
<head>
<title>calculating simple interest</title>
</head>
<body>
<form method="get">
principal:<input type="text" name="txtp"><br><br>
time:<input type="text" name="txtt"><br><br>
rate:<input type="text" name="txtr"><br><br>
<input type="submit" name="btn" value="calculate">
</form>
</body>
</html>
<?php
$p=$t=$r=" ";
if(isset($_GET["btn"]))
{
$p=$_GET["txtp"];
$t=$_GET["txtt"];
$r=$_GET["txtr"];
$si=$p*$t*$r/100;
echo "simple insterest is:".$si;
}
?>