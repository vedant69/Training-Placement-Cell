<?php

function get_conn()
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tnp";
$conn = new mysqli($servername,$username,$password,$dbname);

return $conn;
}

?>


