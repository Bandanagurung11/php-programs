<?php
$server="localhost";
$name="root";
$pass="";
$database="students";
$link=mysqli_connect($server, $name, $pass, $database);
if($link)
{
echo "connection successfully:";
}
else
{
echo "not connected:";
}
?>