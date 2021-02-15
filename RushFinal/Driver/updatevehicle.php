<?php
include "../conn.php";
session_start(); 
$Duname = $_SESSION['uname'];
$query = mysqli_query($conn, "SELECT * FROM  driver_det WHERE Duname='$Duname'") or die("echo(mysqli_error())");
$row = mysqli_fetch_array($query);
$did=$row['DID'];

$query2 = mysqli_query($conn, "SELECT * FROM  vehicle_det WHERE DID='$did'") or die("echo(mysqli_error())");
$row2 = mysqli_fetch_array($query2);
$vid=$row2['VID'];

$vbrand= ($_POST['Vbrand']);
$vmodel = ($_POST['Vmodel']);
$vnum = ($_POST['Vnumber']); 

$sql = " UPDATE vehicle_det SET Vbrand ='$vbrand',Vmodel='$vmodel',Vnumber='$vnum' WHERE VID='$vid'";

if (mysqli_query($conn, $sql)) {
echo '<script> alert(" Vehicle Details Updated Successfully!");</script>';
echo '<script> location.href="DriverSettings.php"</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>