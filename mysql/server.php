<?php
//database variables
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "archivsys";

//connection
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = mysqli_connect($host, $user, $pass, $db_name);

?>