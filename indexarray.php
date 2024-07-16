<?php
$color=array("black","blue","white","purple");
$x[0]=1;
$x[1]=2;
$x[2]=3;
$x[3]=4;
$x[4]=5;
foreach($color as $a)
{
echo $a."<br>";
}
$y=count($x);
for( $s=0; $s<=$y; $s++)
{
echo $x[$s]."<br>";
}
?>