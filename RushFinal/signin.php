<?php
include "./conn.php";

session_start();
$uname = ($_POST['Runame']); 
$pswrd = ($_POST['Rpass']);

if ($uname=='ADMIN' && $pswrd=='admin'){
    echo '<script> location.href="./admin/adminlan.php"</script>';
}else{
    $sql = "SELECT RID FROM rider_det WHERE Runame='$uname' AND Rpswrd='$pswrd' AND is_deleted='NO'";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $sql1 = "SELECT RID FROM  rider_det WHERE Runame='$uname' AND Rpswrd='$pswrd'";
    $result1 = mysqli_query($conn,$sql1);

    while($row = mysqli_fetch_array($result1)){
        $_SESSION['uid'] = $row['RID'];}

         $_SESSION['uname']=$uname;
        //  $_SESSION['uid']=$Rid;
  echo '<script> location.href="./Rider/RenterDashBoard.php"</script>';

} else {
    $sql2 = "SELECT DID FROM driver_det WHERE Duname='$uname' AND Dpass='$pswrd' AND is_deleted='NO'";
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {

        $sql3 = "SELECT DID FROM driver_det WHERE Duname='$uname' AND Dpass='$pswrd'";
        $result3 = mysqli_query($conn,$sql3);
    
        while($row = mysqli_fetch_array($result3)){
            $_SESSION['uid'] = $row['DID'];}
    
             $_SESSION['uname']=$uname;
            //  $_SESSION['uid']=$Rid;
      echo '<script> location.href="./Driver/DriverDashBoard.php"</script>';
    
    }else{
        echo '<script> window.alert("Incorrect Username or password");</script>';
        echo '<script> location.href="SigninUI.php"</script>';
    }
    
}
}


mysqli_close($conn);
?>