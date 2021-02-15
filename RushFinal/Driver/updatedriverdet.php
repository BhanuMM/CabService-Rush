<?php
include "../conn.php";
session_start(); 
$Duname = $_SESSION['uname'];

$nic= ($_POST['Dnic']);
$f_name = ($_POST['Dfname']);
$l_name = ($_POST['Dlname']); 
$tel_no = ($_POST['Dtelno']); 
$licno = ($_POST['Dlicense']); 
$email = ($_POST['Demail']); 
$uname = ($_POST['Duname']); 

$sql = " UPDATE driver_det SET Dnic ='$nic',Dfname='$f_name',Dlname='$l_name',Dtelno='$tel_no',Dlicno='$licno',Demail= '$email' WHERE Duname='$uname'";

if (mysqli_query($conn, $sql)) {
echo '<script> alert(" Updated Successfully!");</script>';
echo '<script> location.href="DriverSettings.php"</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>