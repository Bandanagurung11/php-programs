

<html>
<body>
<form action="setcookie.php" method="get">
enter name:<input type="text" name="txtn"><br>
<input type="submit" name="btn" value="set">
</form>
<?php
if(isset($_GET["btn"]))
{
$x="name";
setcookie($x, $_GET["txtn"], time() + 120, "/");
echo "kookie is set <br>";
}
if(isset($_COOKIE[$x]))
{
echo"value is:".$_COOKIE["name"];
}
else
{
echo "set cookie first";
}
?>