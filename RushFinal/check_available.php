<?php
include "./conn.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Fix a Ride</title>
	<link rel="stylesheet" href="./css/landing.css">

</head>

<body style="margin:0px;" id="grad1" class="availbg">

<div>
		<ul>
  			<li style="float:right"><a href="./FAQ.php">Guide</a></li>
  			<li style="float:right"><a href="./index.php#B3">Contact</a></li>
			<li style="float:right"><a href="./index.php#B2">About Us</a></li>
			<li style="float:right"><a href="./index.php#B1">Earn with Us</a></li>
			<li style="float:right"><a href="./check_available.php">Fix a Ride</a></li>
			<li style="float:right"><a href="./index.php">Home</a></li>
			<li style="float:left"><img src="./img/rushlogo2.png" alt="logo" height="45px"></li>
		</ul>
	</div>



	<h1 style="text-align: center; color:#0b45b8; font-size: 60px;margin-top:20px;margin-bottom:10px;">Availability of Vehicles</h1>
	<section class="row">
		<div class="column" style="text-align: center">
			<h2 style="margin-top:0px;">View Vehicle Availability</h2>
			<br />
			<table id="al">
			<tr><td>
			<p style="text-align: center;">
				<form action="check_available.php">
					  <label>Select Date:</label></td><td>
					  
					  <input type="date" required>
					</td></tr><tr><td>
				<br /><br /><br />
					<label>Select Vehicle:</label></td><td>
					<br /><br /><br />
				  <select id="vtype" name="vtype" style="width:112%;">
				  <option value="Car">Car</option>
					    <option value="Bicycle">Bicycle</option>
					    <option value="Three-wheeler">Three-wheeler</option>
					    
					    <option value="Van">Van</option>
				  </select>
				</div>
				</td></tr><tr><td></td><td><br />
				
				<input type="submit" href="check_available.php?vtype1=<?php $_GET['vtype']?>" name="submit" Value="Check" style="padding-top:10px;">
				
				</form>
				</td></tr>
					</table>
				
			</p>
		</div> 
		
		<?php
		
		if(isset($_REQUEST['vtype']))
		{
			$vtype = $_REQUEST['vtype'];

			$sql2 = "SELECT COUNT(VID) AS countVID FROM v_available WHERE v_avail='YES' AND vtype='$vtype';";
			
			$result=mysqli_query($conn,$sql2);
			
			$row=mysqli_fetch_assoc($result);
			 $avail_vehi=$row['countVID'];
			 
		} 

 ?>

		<div class="column" style="text-align: center; padding-left:50px;">
			<h2 style="margin-top:0px;">There are</h2>
	
			<center>
			<div class="card" style="padding-top:40px;">
				
				<div class="container">
				
					<h1 style="font-size:110px;padding:15px;margin:0;display:in block; text-align:center;"><?php if(isset($_REQUEST['vtype'])){echo $row['countVID'];}else{echo "0";} ?></h1>
				</div>
			</div>
			</center>
			<h2 style="margin-bottom:0px;">vehicle(s) available</h2>
		</div>
	</section>

	<section class="header2" style="margin-top:0px; background-color: #008ecc;">
			<h3 style="text-align: center;margin-top:0px;">To book a ride you must log in to your account</h3>
			<a href="./SigninUI.php"><button class="button button1" style="text-align: center;">Sign in</button></a>

			<p style="text-align: center;"> Haven't registered yet? <a href="./Rider/RiderReg.php" style="color:red;">Register</a></p>
	
	</section>



	<div class="footer">
 		 <p style="color: white;">© Copyright © 2021 - Group 12. All rights reserved.</p>
 		  <p style="color: white;">Emergency Contact: 5678</p>
	</div>
</body>
</html>