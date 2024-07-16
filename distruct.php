<?php
class fruit
{
public function __construct()
{
echo "this is construction function";
}
public function show()
{
echo "<br>this is show method";
}
public function __destruct()
{
echo "<br>this is distructor method";
}
}
$ob=new fruit();
$ob->show();
?>