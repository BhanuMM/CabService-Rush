<?php
include "../conn.php";
session_start(); 
$Runame = $_SESSION['uname'];
$delquery = mysqli_query($conn, "UPDATE rider_det SET is_deleted ='YES' WHERE Runame='$Runame'") or die("echo(mysqli_error())");

echo '<script> alert(" Deleted Successfully!");</script>';
echo '<script> location.href="../SigninUI.php"</script>';
?>