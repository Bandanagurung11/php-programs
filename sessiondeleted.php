<?php 
session_start();
session_unset();
session_destroy();
echo "all session variables are removed and session is destroyed";
?>