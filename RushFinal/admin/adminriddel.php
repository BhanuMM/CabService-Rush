<?php
   
    require('../conn.php');
    $rid=$_REQUEST['RID'];
    $sql = " UPDATE rider_det SET is_deleted ='YES' WHERE RID='$rid'";
    $result = mysqli_query($conn,$sql);
    echo '<script> alert(" Rider Deleted Successfully!");</script>';
echo '<script> location.href="adminlan.php"</script>';
  
?>