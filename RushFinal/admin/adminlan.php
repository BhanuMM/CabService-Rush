<?php

        include('../conn.php');
?>

<html>
<head>
<title>Admin Main</title>
<link rel="stylesheet" href="../css/adminstyle.css">

</head>
<body>

<div>
		<ul>
            <li style="float:right"><a href="../logout.php">Log Out</a></li>
  		    <li style="float:left"><img src="./img/rushlogo2.png" alt="logo" height="6%"></li>
		</ul>
	</div>


<h1>Admin Dashboard</h1>
        
      
      
			<div class="card" style="background-color:#5bebd1;">
				
      <?php
                    $sql_query = "SELECT count(RID) as ridercount from rider_det WHERE is_deleted='NO' ;";
                    $result = mysqli_query($conn, $sql_query);
                    ?>

                        <h2><?php
                            $row = mysqli_fetch_assoc($result);
                            echo $row["ridercount"];
                            
      ?></h2>
					<h3>Riders</h3>
					<input type="submit" name="s1" value="View/Delete" onclick="showTable('riderDet');">
					
			</div>
			
			<div class="card" style="background-color:#269bf0;">
				
      <?php
                    $sql_query = "SELECT count(DID) as drivercount from driver_det WHERE is_deleted='NO';";
                    $result = mysqli_query($conn, $sql_query);
                    ?>

                        <h2><?php
                            $row = mysqli_fetch_assoc($result);
                            echo $row["drivercount"];
                            
      ?></h2>
					<h3>Drivers</h3>
					<input type="submit" name="s2" value="View/Delete" onclick="showTable('driverDet');">
			</div>
			
			<div class="card" style="background-color:#6fbef7;">
					
      <?php
                    $sql_query = "SELECT count(VID) as vehiclecount from vehicle_det  WHERE is_deleted='NO' ;";
                    $result = mysqli_query($conn, $sql_query);
                    ?>

                        <h2><?php
                            $row = mysqli_fetch_assoc($result);
                            echo $row["vehiclecount"];
                            
      ?></h2>
					<h3>Vehicles</h3>
					<input type="submit" name="s3" value="View"  onclick="showTable('vehicleDet');">
			</div>
			
			<div class="card" style="background-color:#7a99eb;">
					
      <?php
                    $sql_query = "SELECT count(trip_id) as tripcount from trip_det;";
                    $result = mysqli_query($conn, $sql_query);
                    ?>

                        <h2><?php
                            $row = mysqli_fetch_assoc($result);
                            echo $row["tripcount"];
                            
      ?></h2>
					<h3>Trips</h3>
					<input type="submit" name="s4" value="View" onclick="showTable('tripDet');">
			</div>
			<div class = "" id = "driverDet"  style="display: none">
      <h1> Driver Details</h1>
            <table width="100%" cellpadding="10px" border="1" style="border-collapse: collapse; ">
                <thead>
                    <tr style="background-color:#269bf0;">
                        <th>DID</th>
                        <th>NIC</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Liscen Number</th>
                        <th>telephone Number</th>
                        <th>e mail</th>
                        <th>User Name</th>
                        <th>Delete User</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // $usernm=$_SESSION['username']
                    $count = 1;
                    
                    $sql_query = "SELECT * FROM driver_det  WHERE is_deleted='NO'; ";
                    $result = mysqli_query($conn, $sql_query);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr class="raw">
                        <td align="center"><?php echo $row["DID"]; ?></td>
                        <td align="center"><?php echo $row["Dnic"]; ?></td>
                        <td align="center"><?php echo $row["Dfname"]; ?></td>
                        <td align="center"><?php echo $row["Dlname"]; ?></td>
                        <td align="center"><?php echo $row["Dlicno"]; ?></td>
                        <td align="center"><?php echo $row["Dtelno"]; ?></td>
                        <td align="center"><?php echo $row["Demail"]; ?></td>
                        <td align="center"><?php echo $row["Duname"]; ?></td>
                        <td align="center"><button><a href="admindrivdel.php?DID=<?php echo $row["DID"]; ?>"> Delete</a></button></td>
                       

                        
                    </tr>
                    <?php $count++;
                    } ?>
                </tbody>
            </table>
        </div>
        <div class = "" id = "riderDet" style="display: none">
        <h1> Rider Details</h1>
        <table width="100%" cellpadding="10px" border="1" style="border-collapse: collapse; ">
                <thead>
                    <tr style="background-color:#5bebd1;">
                        <th>RID</th>
                        <th>NIC</th>
                        <th>First Name</th>
                        <th>Last Number</th>
                        <th>telephone Number</th>
                        <th>e mail</th>
                        <th>User Name</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // $usernm=$_SESSION['username']
                    $count = 1;
                    
                    $sql_query = "SELECT * FROM rider_det  WHERE is_deleted='NO'; ";
                    $result = mysqli_query($conn, $sql_query);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr class="raw">
                        <td align="center"><?php echo $row["RID"]; ?></td>
                        <td align="center"><?php echo $row["Rnic"]; ?></td>
                        <td align="center"><?php echo $row["Rfname"]; ?></td>
                        <td align="center"><?php echo $row["Rlname"]; ?></td>
                        <td align="center"><?php echo $row["Rtelno"]; ?></td>
                       
                        <td align="center"><?php echo $row["Remail"]; ?></td>
                        <td align="center"><?php echo $row["Runame"]; ?></td>
                        <td align="center"><button> <a href="adminriddel.php?RID=<?php echo $row["RID"]; ?>"> Delete</a></button></td>
                       

                        
                    </tr>
                    <?php $count++;
                    } ?>
                </tbody>
            </table>
        </div>
        <div class = "" id = "vehicleDet" style="display: none">
        <h1> Vehicle Details</h1>
        <table width="100%" cellpadding="10px" border="1" style="border-collapse: collapse; ">
                <thead>
                    <tr style="background-color:#6fbef7;">
                        <th>VID</th>
                        <th>Driver</th>
                        <th>Vehical Type</th>
                        <th>Brand</th>
                        <th>model</th>
                        <th>number</th>
                        <th>registerd date</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    // $usernm=$_SESSION['username']
                    $count = 1;
                    
                    $sql_query = "SELECT * FROM vehicle_det v inner join driver_det d on d.DID=v.DID  WHERE v.is_deleted='NO'; ";
                    $result = mysqli_query($conn, $sql_query);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr class="raw">
                        <td align="center"><?php echo $row["VID"]; ?></td>
                        <td align="center"><?php echo $row["Dfname"]." ".$row["Dlname"] ?></td>
                        <td align="center"><?php echo $row["Vtype"]; ?></td>
                        <td align="center"><?php echo $row["Vbrand"]; ?></td>
                        <td align="center"><?php echo $row["Vmodel"]; ?></td>
                        <td align="center"><?php echo $row["Vnumber"]; ?></td>
                        <td align="center"><?php echo $row["Reg_date"]; ?></td>
                        
                    </tr>
                    <?php $count++;
                    } ?>
                </tbody>
            </table>
        </div>
        <div class = "" id = "tripDet" style="display: none">
        <h1> Trips</h1>
        <table width="100%" cellpadding="10px" border="1" style="border-collapse: collapse; ">
                <thead>
                    <tr style="background-color:#7a99eb;">
                        <th>trip_ID</th>
                        <th>VID</th>
                        <th>Vehicle Type</th>
                        <th>DRIVER NAME</th>
                        <th>RIDER NAME</th>
                        <th>Pick up</th>
                        <th>Drop </th>
                        <th>distance</th>
                        <th>passengers</th>
                        <th>fee</th>
                        <th>trip date</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    // $usernm=$_SESSION['username']
                    $count = 1;
                    
                    $sql_query = "SELECT * FROM  trip_det t inner join driver_det d on d.DID=t.DID inner join rider_det r on r.RID=t.RID inner join vehicle_det v on v.VID=t.VID;";
                    $result = mysqli_query($conn, $sql_query);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr class="raw">
                        <td align="center"><?php echo $row["trip_id"]; ?></td>
                        <td align="center"><?php echo $row["VID"]; ?></td>
                        <td align="center"><?php echo $row["Vtype"]; ?></td>
                        <td align="center"><?php echo $row["Dfname"]." ".$row["Dlname"] ?></td>
                        <td align="center"><?php echo $row["Rfname"]." ".$row["Rlname"] ?></td>
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
        </div>
		
		
	<div class="footer">
 		 <p style="color: white;">Copyright © 2021 - Group 12. All rights reserved.</p>
 		 <p style="color: white;">Emergency Contact: 7788</p>
	</div>		
			
  <script>
  function showTable(table){
    document.getElementById("riderDet").style.display="none";
    document.getElementById("driverDet").style.display="none";
    document.getElementById("vehicleDet").style.display="none";
    document.getElementById("tripDet").style.display="none";
    document.getElementById(table).style.display="block";

  }
</script>

</body>
</html>
