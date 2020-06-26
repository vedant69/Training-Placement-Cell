<?php

function get_conn()
{

#$servername = "10.1.4.12";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tnp";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = new mysqli($servername,$username,$password,$dbname);

return $conn;
}

?>


