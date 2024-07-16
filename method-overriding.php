<?php
class base
{
public function show()
{
echo "this is base class method";
}
}
class derieved extends base
{
public function show()
{
echo "<br>this is derieved class method";
}
}
$ob=new base();
$ob->show();
$ob1=new derieved();
$ob1->show();
?>