<?php
include "../conn.php";

$nic= ($_POST['Rnic']);
$f_name = ($_POST['Rfname']);
$l_name = ($_POST['Rlname']); 
$tel_no = ($_POST['Rtelno']); 
$adrs = ($_POST['Raddress']); 
$email = ($_POST['Remail']); 
$uname = ($_POST['Runame']); 
$pswrd = ($_POST['Rpass']);

$sql = "INSERT INTO rider_det (Rnic,Rfname,Rlname,Rtelno,Radrs,Remail,Runame,Rpswrd,is_deleted) VALUES('$nic','$f_name', '$l_name', '$tel_no','$adrs','$email','$uname','$pswrd','NO')";

if (mysqli_query($conn, $sql)) {
  // echo "New record successfully";
  echo '<script> alert("Success!");</script>';
  echo '<script> location.href="../SigninUI.php"</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>