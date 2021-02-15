<?php
include "../conn.php";
session_start(); 

if($_POST['check']=="YES"){
  

$pick= ($_POST['1pick']);
$drop = ($_POST['1drop']);
$dis = ($_POST['1dis']); 
$pas = ($_POST['1pas']); 
$date = ($_POST['1date']); 

$Vid = ($_POST['vid']); 
$Did = ($_POST['did']); 
$Rid = ($_POST['rid']);
$fee = ($_POST['fee']);

$sql = "INSERT INTO trip_det (VID,DID,RID,Pick_up,Drop_lo,distan,No_pass,fee,trip_date,is_completed) VALUES('$Vid','$Did','$Rid', '$pick','$drop','$dis','$pas','$fee','$date','NO')";
$upquery = mysqli_query($conn, "UPDATE v_available SET v_avail ='NO',book_date='$date' WHERE DID='$Did'") or die("echo 3(mysqli_error())");

if (mysqli_query($conn, $sql)) {
  // echo "New record successfully";
  echo '<script> alert("Success!");</script>';
  echo '<script> location.href="RenterDashBoard.php"</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}}else{
  echo '<script> alert("Could Not Complete the booking!.Please Check again!");</script>';
  echo '<script> location.href="bookride.php"</script>';
}

mysqli_close($conn);
?>