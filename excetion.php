<html>
<head></head>
<body>
<?php
function value($x,$y)
{
if($y==0)
{
throw new Exception("<br>divide by zero");
}
else
{
echo $x/$y;
}
}
try
{
value(4,2);
value(3,0);
}
catch(Exception $e)
{
echo $e->getMessage()."<br>";
echo $e->getline();
}
finally
{
echo "<br>this is final block";
}
?>
</body>
</html>

