
<html>
<head></head>
<body>
<form method="get" action="factorial.php">
enter number:<input type="text" name="n1"><br><br>
<input type="submit" name="btn" value="factorial">
</form>
</body>
</html>


<?php
$fact=1;
if(isset($_GET["btn"]))
{
$n=$_GET["n1"];
for($i=1; $i<=$n; $i++)
{
$fact=$fact * $i;
}
echo "factorial of entered number is:".$fact;
}
?>