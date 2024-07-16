<?php
class car
{
public $comp;
public $color='beige';
public $hasSunRoog='true';
public function hello()
{
return "beep";
}
}
$bmw=new car();
$mercedes=new car();
echo "<br>".$bmw->color;
echo "<br>".$mercedes->color;
echo "<hr>";
$bmw->color='blue';
$bmw->comp="bmw";
$mercedes->comp="mercedes benz";
echo "<br>".$bmw->color;
echo "<br>".$mercedes->color;
echo "<hr>";
echo "<br>".$bmw->hello();
echo "<br>".$mercedes->hello();