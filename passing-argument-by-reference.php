<html>
<head>
<title>passing argument by reference</title>
</head>
<body>
<?php
function addfive($num)
{
$num +=5;
}
function addsix(&$num)
{
$num +=6;
}
$origin=10;
addfive($origin);
echo "original value is $origin <br>";
addsix($origin);
echo "original value is $origin <br>";
?>
</body>
</html>
