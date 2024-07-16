<?php
class student
{
var $a;
public $b;
public function show()
{
echo "this is base class method";
echo " <br> a variable number is ".$this->a;
}
}
class marks extends student
{
public function display()
{
echo "<br> this is child class method";
echo " <br> a variable number is $this->b";
}
}
$ob=new marks();
$ob->a=10;
$ob->show();
$ob->b=20;
$ob->display();
?>