<html>
<body>
<?php
$conn=mysqli_connect("localhost", "root", "", "studentDB");
$query="SELECT * FROM student1";
$rec=mysqli_query($conn,$query);
$t="<table border='1'>
<tr>
<th>id</th>
<th>name</th>
<th>class</th>
<th>roll</th>
<th>email</th>
</tr>";
while($row=mysqli_fetch_assoc($rec))
{
$t=$t."<tr>
<td>$row[id]</td>
<td>$row[name]</td>
<td>$row[class]</td>
<td>$row[roll]</td>
<td>$row[email]</td>
</tr>";
}
$t=$t."</table>";
echo $t;
?>
</body>
</html>

