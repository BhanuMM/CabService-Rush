<?php 
include "../conn.php";
session_start(); 
$Duname = $_SESSION['uname'];
$query = mysqli_query($conn, "SELECT Dpass FROM  driver_det WHERE Duname='$Duname'") or die("echo(mysqli_error())");
$row = mysqli_fetch_array($query);
$opswrd= $row['Dpass'];

$oldpass = ($_POST['Dopass']); 
$renewpass = ($_POST['Depass']);
$newpass = ($_POST['Dnpass']); 

if ($oldpass==$opswrd){
 if($newpass==$renewpass){
    $sql = " UPDATE driver_det SET Dpass= '$newpass' WHERE Duname='$Duname'";

    if (mysqli_query($conn, $sql)) {
    echo '<script> alert(" Password Changed Successfully!");</script>';
    echo '<script> location.href="DriverDashBoard.php"</script>';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
 }else{
    echo '<script> alert(" Entered Password Does not Match");</script>';
    echo '<script> location.href="DriverSettings.php"</script>';
 }
}else{
    echo '<script> alert(" Incorrect password!");</script>';
    echo '<script> location.href="DriverSettings.php"</script>';
}
mysqli_close($conn);				
?>