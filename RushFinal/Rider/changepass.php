<?php 
include "../conn.php";
session_start(); 
$Runame = $_SESSION['uname'];
$query = mysqli_query($conn, "SELECT Rpswrd FROM  rider_det WHERE Runame='$Runame'") or die("echo(mysqli_error())");
$row = mysqli_fetch_array($query);
$opswrd= $row['Rpswrd'];

$oldpass = ($_POST['Ropass']); 
$renewpass = ($_POST['Repass']);
$newpass = ($_POST['Rnpass']); 

if ($oldpass==$opswrd){
 if($newpass==$renewpass){
    $sql = " UPDATE rider_det SET Rpswrd= '$newpass' WHERE Runame='$Runame'";

    if (mysqli_query($conn, $sql)) {
    echo '<script> alert(" Password Changed Successfully!");</script>';
    echo '<script> location.href="RenterDashBoard.php"</script>';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
 }else{
    echo '<script> alert(" Entered Password Does not Match");</script>';
    echo '<script> location.href="RiderSettings.php"</script>';
 }
}else{
    echo '<script> alert(" Incorrect password!");</script>';
    echo '<script> location.href="RiderSettings.php"</script>';
}
mysqli_close($conn);				
?>