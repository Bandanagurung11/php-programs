<?php
setcookie("name","bandana", time() + 120, "/");
?>
<html>
<body>
<?php
if(count($_COOKIE)>0)
{
echo " cookie is enabled";
}
else
{
echo 'cookie is not enabled';
}
?>
</body>
</hmtl>