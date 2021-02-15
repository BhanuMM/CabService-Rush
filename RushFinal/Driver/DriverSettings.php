<?php 
include "../conn.php";
session_start(); 
$Duname = $_SESSION['uname'];
$query = mysqli_query($conn, "SELECT * FROM  driver_det WHERE Duname='$Duname'") or die("echo(mysqli_error())");
$row = mysqli_fetch_array($query);
$did=$row["DID"];
$query2 = mysqli_query($conn, "SELECT * FROM  vehicle_det WHERE DID='$did'") or die("echo(mysqli_error())");
$row2 = mysqli_fetch_array($query2);
				
?>
<html>
<head>
<title>Driver Account Settings</title>
<link rel="stylesheet" href="../css/driverexternal1.css">

<style>
.rightmost {
  position: absolute;
  margin-left: 80%;
  width: 30%;
  border: none;
  padding: 0px;
}


</style>
</head>
<body>

	<div>
		<ul style="width: 100%;"> 
			<li style="float:right"><a href="../logout.php">Sign Out</a></li>
			<li style="float:right"><a href="./FAQ.php">Guide</a></li> 	
			<li style="float:right"><a href="./drivtrip.php">Trip History</a></li> 		
			<li style="float:right"><a href="./DriverDashBoard.php">Back</a></li>
			<li style="float:left"><img src="../img/rushlogo2.png" alt="logo" height="7%"></li>
		</ul>
	</div>


<div class="left">
<h1>Accounts Settings</h1><br />
<form method="post" class="data" action="updatedriverdet.php"> 
<table border=0>
<tr>
<td>
NIC:</td><td>
<input type="text" id="Dnic" name="Dnic" size=12 placeholder="NIC number..." value="<?php echo $row['Dnic']; ?>" ><br /></td></tr>
<tr>
<td>
First Name:</td><td>
<input type="text" id="Dfname" name="Dfname" size=15 placeholder="First name..." value="<?php echo $row['Dfname']; ?>" ><br /></td></tr>
<tr>
<td>
Last Name:</td><td>
<input type="text" id="Dlname" name="Dlname" size=20 placeholder="Last name..." value="<?php echo $row['Dlname']; ?>" ><br /></td></tr>
<tr>
<td>
Contact Number:</td><td>
<input type="text" id="Dtelno" name="Dtelno" size=10 placeholder="Contact number..." value="<?php echo $row['Dtelno']; ?>" ><br /></td></tr>
<tr>
<td>
License Number:</td><td>
<input type="text" id="Dlicense" name="Dlicense" size=10 placeholder="License number..." value="<?php echo $row['Dlicno']; ?>" ><br /></td></tr>
<tr>
<td>
Email:</td><td>
<input type="text" id="Demail" name="Demail" size=40 placeholder="Email address..." value="<?php echo $row['Demail']; ?>" ><br /></td></tr>
<tr>
<td>
Username:</td><td>
<input type="text" id="Duname" name="Duname" size=40 placeholder="Username..." value="<?php echo $row['Duname']; ?>" readonly><br /></td></tr>
</table>

<input type="submit" name="submitbutton1" Value="Update" style="width:175px; margin-left:75px; margin-right: 10px">
<input type="submit" value="Cancel" style="width:175px;">
</form>

</div>
<!-- <div class="vl"></div> -->

<div style="margin-top:7%; margin-left: 550px;">
	<h2 style="color:#3D7AF5;">Vehicle Settings</h2><br />
	<form method="post" class="data" action="updatevehicle.php"> 
		<table border=0>
		<tr>
		<td>
		Vehicle Type:</td><td>
		<input type="text" id="vtype" name="vtype" size=12 placeholder="Vehicle Type..." value="<?php echo $row2['Vtype']; ?>" readonly><br /></td></tr>
		<tr>
		<td>
		Vehicle Brand:</td><td>
		<input type="text" id="Vbrand" name="Vbrand" size=15 placeholder="Vehicle Brand..." value="<?php echo $row2['Vbrand']; ?>"><br /></td></tr>
		<tr>
		<td>
		Vehicle Model:</td><td>
		<input type="text" id="Vmodel" name="Vmodel" size=15 placeholder="Vehicle Model..." value="<?php echo $row2['Vmodel']; ?>"><br /></td></tr>
		<tr>
		<td>
		Vehicle Number:</td><td>
		<input type="text" id="Vnumber" name="Vnumber" size=15 placeholder="Vehicle Number..." value="<?php echo $row2['Vnumber']; ?>"><br /></td></tr>
		</table>
		
		<input type="submit" name="submitbutton1" Value="Update" style="width:175px; margin-left:-12px; ">
        <input type="submit" value="Cancel" style="width:175px;">

    </form>
    <form method="post" action="deletedriv.php">
	<input class="delete" type="submit" name="submitbutton1" Value="Delete Account" style="margin-top:4%; width:175px; margin-left:90px; background-color: red;">
</form>
</div>

<!-- <div class="vl1"></div> -->

<div  style="margin-top:-29%; margin-left: 950px;">
<h2 style="color:#3D7AF5;">Change Password</h2>
	<form method="post" class="data" action="changepass.php"> 
		<table border=0>
			<tr>
				<td>
					Current Password:</td>
				<td>
					<input type="password" id="Dopass" name="Dopass" minlength="4" placeholder="***********"></td></tr>
				<td>
					New Password:</td>
				<td>
					<input type="password" id="Dnpass" name="Dnpass" minlength="4" placeholder="***********"></td></tr>
				<tr>
				<td>
					Re-enter New Password:</td>
				<td>
					<input type="password" id="Depass" name="Depass" minlength="4" placeholder="***********"></td></tr>
		</table>

		<input type="submit" name="submitbutton1" Value="Change Password" style="width:175px; margin-left:100px; margin-top:10%;"> <br />
		
		
	</form>
	
</div>


<section>
	<div class="footer" style="width: 98.5%;">
 		 <p style="color: white;">Copyright © 2021 - Group 12. All rights reserved.</p>
 		 <p style="color: white;">Emergency Contact: 5678</p>
	</div>
</section>

</body>
</html>