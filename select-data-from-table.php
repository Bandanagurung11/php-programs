<html>
<head></head>
<body>
<form method="get" action="select-data-from-table.php">
id:<input type="text" name="n1"><br><br> 
<input type="submit" name="btn" value="select">
</form>
</body>
</html>

<?php
if(isset($_GET["btn"]))
{
$x=$_GET["n1"];
$conn=mysqli_connect("localhost", "root", "", "studentDB");
$query="SELECT `name`, `class`, `roll` FROM `student1` WHERE `id`=$x";
$rec=mysqli_query($conn, $query);
$t="<table border='1'>
<tr>
<th>name</th>
<th>class</th>
<th>roll</th>
</tr>";
while($row=mysqli_fetch_assoc($rec))
{
$t=$t."<tr>
<td>$row[name]</td>
<td>$row[class]</td>
<td>$row[roll]</td>
</tr>";
}
$t=$t."</table>";
echo $t;
}
?>
