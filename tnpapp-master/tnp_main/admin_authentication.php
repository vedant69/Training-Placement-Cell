<?php

include "db.php";
session_start();
$conn = get_conn();


$sql = "select password from admin where aid='".$_REQUEST['aid']."' ; ";

$q = $conn->query($sql) or die('failed');

 $r = mysqli_fetch_assoc($q);

if ($r['password'] == $_REQUEST['password'])
{
 $_SESSION['admin'] = $_REQUEST['aid'];
 header("Location: welcome_admin.php");

}
else
{
echo "wrong password: authentication failed";

} 

?>
