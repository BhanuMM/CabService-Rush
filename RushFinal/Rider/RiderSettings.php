<?php 
include "../conn.php";
session_start(); 
$Runame = $_SESSION['uname'];
$query = mysqli_query($conn, "SELECT * FROM  rider_det WHERE Runame='$Runame'") or die("echo(mysqli_error())");
$row = mysqli_fetch_array($query);
				
?>
<html>
<head>
<title>Account Settings</title>
<link rel="stylesheet" href="../css/driverexternal1.css">
</head>
<body>

	<div>
		<ul>
			<li style="float:right"><a href="../logout.php">Sign Out</a></li>
			<li style="float:right"><a href="./FAQ.php">Guide</a></li>
			<li style="float:right"><a href="./RenterDashBoard.php">Back</a></li>
			<li style="float:left"><img src="../img/rushlogo2.png" alt="logo" height="7%"></li>
		</ul>
	</div>

<div class="left" style="float:left; width:100%">
<h1>Accounts Settings</h1><br />
<form method="post" class="data" action="updaterid.php"> 
<table border=0>
<tr>
<td>
NIC:</td><td>
<input type="text" id="Rnic" name="Rnic" size=12 placeholder="NIC number..." value="<?php echo $row['Rnic']; ?>" ><br /></td></tr>
<tr>
<td>
First Name:</td><td>
<input type="text" id="Rfname" name="Rfname" size=15 placeholder="First name..." value="<?php echo $row['Rfname']; ?>" ><br /></td></tr>
<tr>
<td>
Last Name:</td><td>
<input type="text" id="Rlname" name="Rlname" size=20 placeholder="Last name..." value="<?php echo $row['Rlname']; ?>" ><br /></td></tr>
<tr>
<td>
Contact Number:</td><td>
<input type="text" id="Rtelno" name="Rtelno" size=10 placeholder="Contact number..." value="<?php echo $row['Rtelno']; ?>"><br /></td></tr>
<tr>
<td>
Address:</td><td>
<input type="text" id="Raddress" name="Raddress" size=50 placeholder="Home address..." value="<?php echo $row['Radrs']; ?>"><br /></td></tr>
<tr>
<td>
Email:</td><td>
<input type="text" id="Remail" name="Remail" size=40 placeholder="Email address..." value="<?php echo $row['Remail'];  ?>"  ><br /></td></tr>
<tr>
<td>
Username:</td><td>
<input type="text" id="Runame" name="Runame" size=40 placeholder="Username..." value="<?php echo $row['Runame'];; ?>" readonly><br /></td></tr>
</table>

<input type="submit" name="submitbutton1" Value="Update" style="width:175px; margin-left:170px;">
<input type="submit" value="Cancel" style="width:175px;">
</form>

</div>



<div class="right" style="margin-top:7%; float: left;
  right: 0px;  width: 55%;">
<h2 style="color:#3D7AF5;">Change Password</h2>
	<form method="post" class="data" action="changepass.php"> 
		<table >
			<tr>
				<td>
					Current Password:</td>
				<td>
					<input type="password" id="Ropass" name="Ropass" minlength="4" placeholder="***********"></td></tr>
				<td>
					New Password:</td>
				<td>
					<input type="password" id="Rnpass" name="Rnpass" minlength="4" placeholder="***********"></td></tr>
				<tr>
				<td>
					Re-enter New Password:</td>
				<td>
					<input type="password" id="Repass" name="Repass" minlength="4"  placeholder="***********"></td></tr>
		</table>

		<input type="submit" name="submitbutton1" Value="Change Password" style="width:175px; margin-left:200px; margin-top:25px;">
		
	
	</form>
	<form method="post" action="deleterider.php">
<input type="submit" name="submitbutton1" Value="Delete Account" style="background-color: red; margin-left:190px;">
    <!-- <button type="submit">delete</button> -->
</form>
</div>



	

	<div class="footer">
 		 <p style="color: white;">Copyright © 2021 - Group 12. All rights reserved.</p>
 		 <p style="color: white;">Emergency Contact: 5678</p>
	</div>

	
</body>
</html>