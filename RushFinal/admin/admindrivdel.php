<?php
   
    require('../conn.php');
    $did=$_REQUEST['DID'];
    $sql = " UPDATE driver_det SET is_deleted ='YES' WHERE DID='$did'";
    $result = mysqli_query($conn,$sql);
    $sql = " UPDATE vehicle_det SET is_deleted ='YES' WHERE DID='$did'";
    $result = mysqli_query($conn,$sql);
    echo '<script> alert(" Driver Deleted Successfully!");</script>';
echo '<script> location.href="adminlan.php"</script>';
  
?>