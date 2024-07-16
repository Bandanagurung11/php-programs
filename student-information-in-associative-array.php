

<html>
<head></head>
<body>
<form method="get" action="student-information-in-associative-array.php">
name:<input type="text" name="n1"><br><br>
age:<input type="text" name="n2"><br><br>
email:<input type="text" name="n3"><br><br>
address:<input type="text" name="n4"><br><br>
<input type="submit" name="btn" value="show">
</form>
</body>
</html>


<?php
if(isset($_GET["btn"]))
{
$n=$_GET["n1"];
$x=$_GET["n2"];
$y=$_GET["n3"];
$z=$_GET["n4"];
$x=array("name"=>$n, "age"=>$x, "email"=>$y, "adress"=>$z);
foreach($x as $a=>$b)
{
echo $a." is ".$b."<br>";
}
}
?>
