<?php
include "../conn.php";
session_start(); 
$Runame = $_SESSION['uname'];

$nic= ($_POST['Rnic']);
$f_name = ($_POST['Rfname']);
$l_name = ($_POST['Rlname']); 
$tel_no = ($_POST['Rtelno']); 
$adrs = ($_POST['Raddress']); 
$email = ($_POST['Remail']); 
$uname = ($_POST['Runame']); 

$sql = " UPDATE rider_det SET Rnic ='$nic',Rfname='$f_name',Rlname='$l_name',Rtelno='$tel_no',Radrs='$adrs',Remail= '$email' WHERE Runame='$uname'";

if (mysqli_query($conn, $sql)) {
echo '<script> alert(" Updated Successfully!");</script>';
echo '<script> location.href="RiderSettings.php"</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>