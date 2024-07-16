<html>
<body>
<?php
class myException extends Exception
{
function message(){
$error=this->getMessage();
return $error;
}
}
function get($x,$y)
{
if($y==0)
{
throw new Exception("<br> divide by zero");
}
if($x==3)
{
throw new myException("3 is not allowed here");
}
return $x/$y;
}
try
{
get(3,2);
}
catch (Exception $e)
{
echo $e->getMessage();
}
catch (myException $a)
{
echo $a->message();
}
finally
{
echo "<br>final block";
}
?>
</body>
</html>
