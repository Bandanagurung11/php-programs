<?php
class fruit
{
public $name;
public $color;
public function __construct($n,$x)
{
$this->name=$n;
$this->color=$x;
}
public function show()
{
echo "<br> your name is:".$this->name;
echo "<br> your name color is:".$this->color;
}
}
$ob=new fruit("graphs","green");
$ob->show();
?>