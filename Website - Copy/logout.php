<?php
require 'navbar.php'; 

session_destroy(); 
header("location:login.php"); 
exit;
?>
