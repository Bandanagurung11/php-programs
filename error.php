<?php
echo "warning error <br>";
include("txt.php");
echo "<hr>";
echo "notice error<br>";
$a=20;
echo $b;
echo "<hr>";
/*echo "parse error";
echo "bandana;*/
echo "fatal error <br>";
function sum($a,$b)
{
$a=$a+$b;
echo $a;
}
sum();
?>