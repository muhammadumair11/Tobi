<?php
ob_start();
define("DB_USER", 'localhost');
define("USER", 'root');
define("DB_PASS", '');
define("DB_NAME", 'aroma');
$conn=mysqli_connect(DB_USER, USER,  DB_PASS, DB_NAME  ) or die(mysqli_error());

?>

