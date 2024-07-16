<?php
class Fruit{
public $color;
public $qlt="good";
public $price="50";
}

$apple=new Fruit();
echo "price of apple is:".$apple->price;
echo "<br> color of apple :".$apple->color="red"."<br>";
?>