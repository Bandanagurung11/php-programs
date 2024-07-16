

<html>
<head></head>
<body>
<form method="get" action="division-display.php">
enter percentage:<input type="text" name="n1"><br><br>
<input type="submit" name="btn" value="result">
</form>
</body>
</html>


<?php
if(isset($_GET["btn"]))
{
$n=$_GET["n1"];
switch($n)
{
case $n>=80:
echo "distinction";
break;

case $n>=60:
echo "first division";
break;

case $n>=50:
echo "second division";
break;

case $n>=30:
echo "third division";
break;

default:
echo "fail";
break; 
}
}
?>