<?php
include "../conn.php";
session_start(); 
$Duname = $_SESSION['uname'];
$delquery = mysqli_query($conn, "UPDATE driver_det SET is_deleted ='YES' WHERE Duname='$Duname'") or die("echo 1(mysqli_error())");


$query = mysqli_query($conn, "SELECT * FROM  driver_det WHERE Duname='$Duname'") or die("echo 2(mysqli_error())");
$row = mysqli_fetch_array($query);
$did=$row['DID'];
$delvehiquery = mysqli_query($conn, "UPDATE vehicle_det SET is_deleted ='YES' WHERE DID='$did'") or die("echo 1(mysqli_error())");
$upquery = mysqli_query($conn, "UPDATE v_available SET v_avail ='NO' WHERE DID='$did'") or die("echo 3(mysqli_error())");
echo '<script> alert("Deleted Successfully!");</script>';
echo '<script> location.href="../SigninUI.php"</script>';
?>