<?php
class fruits{
public $name;
/*public $color="red";
public $season="spring";*/
public function myfunction()
{
echo "this is class function". "<br>your name is:".$this->name;
}
}
$ob1=new fruits();
$ob1->name="apple";
echo $ob1->myfunction();
/*echo "<br>".$ob1->season;
$ob1->name="apple";
echo "<br>".$ob1->name;*/
?>