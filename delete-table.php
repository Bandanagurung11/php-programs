<?php
$conn=mysqli_connect("localhost", "root", "", "studentDB");
$query="DROP TABLE student ";
$ans=mysqli_query($conn,$query);
if($ans)
{
echo "table deleted";
}
else
{
echo "table not deleted";
}
?>