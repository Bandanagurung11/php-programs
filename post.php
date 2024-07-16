<!DOCTYPE html>
<html>
<body>
<form method="post" action="post.php">
  Name: <input type="text" name="fname" value="<?php echo $s;?>">
  <input type="submit" name="btn" value="submit">
</form>
<?php
$s=" ";
if(isset($_post["btn"]))
{
$s=$_post["fname"];
if(empty($s)
{
echo"thia text is empty";
}
else
{
echo"$s";
}
}
?>
</body>
</html>