<?php
  include "../conn.php";
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
table, td, th {
  border: 1px solid white;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
    <link rel="stylesheet" href="../css/driverstyleDash.css" />
    <title>RenterDash</title>
  </head>

  <body>

<section>
    <div>
    <ul>
       <li style="float:right"><a href="../logout.php">Log out</a></li>
      <li style="float:right"><a class="active" href="./RenterDashBoard.php">Back</a></li>
      <li style="float:left"><img src="../img/rushlogo2.png" alt="logo" height="40px"></li>
    </ul>
  </div>
</section>

<h1 style="color: #ffffff; text-align: center; font-size: 40px; font-family: Trebuchet MS">Trip History</h1>
<table style="color: #ffffff; font-family: Trebuchet MS;" cellpadding="8px" >
  <thead>
  <tr>
    <th>Vehicle Number</th>
    <th>Driver Name</th>
    <th>Pick-Up Location</th>
    <th>Drop Location</th>
    <th>Distance (km)</th>
    <th>No of Passengers</th>
    <th>Trip Fee (Rs.)</th>
    <th>Trip Date</th>
  </tr>
  </thead> 
  <tbody>
                    <?php
                    $uname=$_SESSION['uname'];
                    $count = 1;
                    $sql1 = "SELECT RID FROM rider_det WHERE Runame = '$uname'";
                    $result = mysqli_query($conn,$sql1);

                    $row = mysqli_fetch_array($result);
                    $Rid = $row['RID'];

                    $sql_query = "SELECT * FROM trip_det WHERE RID='$Rid' ";
                    $result2 = mysqli_query($conn, $sql_query);
                    while ($row = mysqli_fetch_assoc($result2)) { 
                        $did=$row['DID'];
                        $sql_query1 = "SELECT * FROM driver_det WHERE DID='$did'";
                        $result3 = mysqli_query($conn, $sql_query1);
                        $row2 = mysqli_fetch_assoc($result3);

                        $vid=$row['VID'];
                        $sql_query4 = "SELECT * FROM vehicle_det WHERE VID='$vid'";
                        $result4 = mysqli_query($conn, $sql_query4);
                        $row3 = mysqli_fetch_assoc($result4);
                      ?>

                    <tr class="raw">
                        <td align="center"><?php echo $row3["Vnumber"]; ?></td>
                        <td align="center"><?php echo $row2["Dfname"]." ".$row2["Dlname"]; ?></td>
                        <td align="center"><?php echo $row["Pick_up"]; ?></td>
                        <td align="center"><?php echo $row["Drop_lo"]; ?></td>
                        <td align="center"><?php echo $row["distan"]; ?></td>
                        <td align="center"><?php echo $row["No_pass"]; ?></td>
                        <td align="center"><?php echo $row["fee"]; ?></td>
                        <td align="center"><?php echo $row["trip_date"]; ?></td>
                    </tr>
                    <?php $count++;
                    } ?>
                </tbody>
</table>




<br>
<br>
    </div> </section>

        <div class="footer">
     <p style="color: white; margin: 5px; font-family: Trebuchet MS;">Copyright &#169; 2021 - Group 12. All rights reserved.</p>
     <p style="color: white; margin: 5px; font-family: Trebuchet MS;">Emergency Contact: 5678</p>
  </div>

  </body>
</html>
