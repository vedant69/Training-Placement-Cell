<?php
include "config.php";
$conn = get_conn();
$sql = "select count(*) from company where approval_status = 1;";
$q = $conn->query($sql) or die('failed');
$row = mysqli_fetch_assoc($q);
echo $row['count']; 
?>
