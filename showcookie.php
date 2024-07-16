<?php
if(isset($_COOKIE["name"]))
{
echo"value is:".$_COOKIE["name"];
}
else
{
echo "set cookie first";
}
?>