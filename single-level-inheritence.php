<?php
class student
{
public $name;
public $roll;
public function __construct($name,$roll)
{
$this->name=$name;
$this->roll=$roll ;
}
public function show()
{
echo "<br> your name is:".$this->name;
echo "<br> your roll is:".$this->roll;
}
}
class marks extends student
{
public $nbr;
function getMarks($n)
{
$nbr=$n;
echo "<br> your marks is".$nbr;
}
}
$ob=new marks("bandana",10);
$ob->show();
$ob->getMarks(90);
?>