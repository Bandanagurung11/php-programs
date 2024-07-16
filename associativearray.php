<?php
$cars=array("black"=>"scooty","blue"=>"motor","grey"=>"auto");
$x['name']="bandana";
$x['cast']="gurung";
$x['age']=20;
foreach($cars as $a=>$b)
{
echo $a." is ".$b."<br>";
}
foreach($x as $a=>$b)
{
echo $a." is ".$b."<br>";
}
?>