<?php
include "../conn.php";

session_start();
$uname = ($_SESSION['uname']);

$sql = "SELECT DID FROM driver_det WHERE Duname='$uname'";
$result1 = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result1);
$did= $row['DID'];

$sql2 = " UPDATE trip_det SET is_completed ='YES' WHERE DID='$did'";
$upquery = mysqli_query($conn, "UPDATE v_available SET v_avail ='YES',book_date='' WHERE DID='$did'") or die("echo 3(mysqli_error())");

if (mysqli_query($conn, $sql2)) {
echo '<script> alert(" Trip Details Recorded!.");</script>';
echo '<script> location.href="DriverDashBoard.php"</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>