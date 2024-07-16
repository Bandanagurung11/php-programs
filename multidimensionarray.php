<?php
$color=array(
array("blue","dark blue","light blue"),
array(1,2,"3"),
array("a","b","c")
);
for($r=0; $r<=2; $r++)
{
for($c=0; $c<=2; $c++)
{
echo $color[$r][$c]."<br>";
}
echo"next array <br>";
}
?> 
