<?php

$conn=mysqli_connect("localhost", "root", "", "croplink");
$query="CREATE TABLE login (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(30),
  phone INT(3),
  password INT(2) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$ans=mysqli_query($conn,$query);
if($ans)
{
echo "table created";
}
else
{
echo "table not created";
}
?>