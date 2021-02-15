<?php
include "../conn.php";

$nic= ($_POST['Dnic']);
$f_name = ($_POST['Dfname']);
$l_name = ($_POST['Dlname']); 
$tel_no = ($_POST['Dtelno']); 
$licno = ($_POST['Dlicno']); 
$email = ($_POST['Demail']); 
$uname = ($_POST['Duname']); 
$pswrd = ($_POST['Dpass']);

// <?php
// if(isset($_POST['submit'])){
//   if(!empty($_POST['Vtype'])) {
//     foreach($_POST['Vtype'] as $vtype){
    
//     }          
//   } else {
//     echo 'Please select the value.';
//   }
// }
// 

$vtype=($_POST['Vtype']);
$vbrand = ($_POST['Vbrand']);
$vmodel = ($_POST['Vmodel']);
$vnumber = ($_POST['Vnumber']);
$date = date("Y-m-d");
//insert driver data
$sql = "INSERT INTO driver_det (Dnic,Dfname,Dlname,Dlicno,Dtelno,Demail,Duname,Dpass,is_deleted) VALUES('$nic','$f_name', '$l_name','$licno', '$tel_no','$email','$uname','$pswrd','NO')";

if (mysqli_query($conn, $sql)) {
  // echo "New record successfully";
  // echo '<script> alert("Success!");</script>';
  // echo '<script> location.href="DriverSignIn.html"</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//get driver id
$sql1 = "SELECT DID FROM driver_det WHERE Dlicno = '$licno' and Duname = '$uname'";
$result = mysqli_query($conn,$sql1);

while($row = mysqli_fetch_array($result)){
     $Did = $row['DID'];}

//insert vehicle details
$sql2 = "INSERT INTO vehicle_det (DID,Vtype,Vbrand,Vmodel,Vnumber,Reg_date,is_deleted) VALUES('$Did','$vtype', '$vbrand', '$vmodel','$vnumber','$date','NO')";
if (mysqli_query($conn, $sql2)) {
  // echo "New record successfully";
  // echo '<script> alert("Success!");</script>';
  // echo '<script> location.href="DriverSignIn.html"</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//get vehicle id
$sql3 = "SELECT VID FROM vehicle_det WHERE DID = '$Did' and Vnumber = '$vnumber'";
$result1 = mysqli_query($conn,$sql3);

while($row2 = mysqli_fetch_array($result1)){
     $Vid = $row2['VID'];}

//insert to availbility table
$sql4 = "INSERT INTO v_available (VID,DID,V_avail,vtype,book_date) VALUES('$Vid','$Did', 'YES', '$vtype','')";

if (mysqli_query($conn, $sql4)) {
  // echo "New record successfully";
  echo '<script> alert("Success!");</script>';
  echo '<script> location.href="../SigninUI.php"</script>';
} else {
  echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>