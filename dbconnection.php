<?php
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT  &  ~E_WARNING);
// Create connection
$con=mysqli_connect("sql6.freemysqlhosting.net","","","");
echo mysqli_connect_error();
?>
