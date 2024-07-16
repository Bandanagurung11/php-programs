 
<html>
<head></head>
<body>
<form method="get" action="insert-into-table.php">
name:<input type="text" name="n2"><br><br>
class:<input type="text" name="n3"><br><br>
roll:<input type="text" name="n4"><br><br>
email:<input type="email" name="n5"><br><br> 
<input type="submit" name="btn" value="insert">
</form>
</body>
</html>

<?php
if(isset($_GET["btn"]))
{
$x=$_GET["n2"];
$y=$_GET["n3"];
$z=$_GET["n4"];
$a=$_GET["n5"];
$conn=mysqli_connect("localhost", "root", "", "studentDB");
$query="INSERT INTO `student1` ( `name`, `class`, `roll`, `email`) VALUES ( '$x', '$y', '$z','$a')";
$ans=mysqli_query($conn,$query);
if($ans)
{
echo "data saved";
}
else
{
echo "data not saved";
}
}
?>
