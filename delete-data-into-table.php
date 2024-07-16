<html>
<head></head>
<body>
<form method="get" action="delete-data-into-table.php">
enter id:<input type="text" name="n1"><br><br> 
<input type="submit" name="btn" value="delete">
</form>
</body>
</html>

<?php
if(isset($_GET["btn"]))
{
$x=$_GET["n1"];
$conn=mysqli_connect("localhost", "root", "", "studentDB");
$query="DELETE FROM `student1` WHERE `student1`.`id` =$x  ";
// or "DELETE FROM `student1` WHERE `id` =$x  ";
$ans=mysqli_query($conn,$query);
if($ans)
{
echo "data deleted";
}
else
{
echo "data not deleted";
}
}
?>