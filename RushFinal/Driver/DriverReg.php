<html>
<head>
<title>Driver Registration</title>
<link rel="stylesheet" href="../css/driverexternal1.css">


</head>
<body>

	<div>
		<ul>
			<li style="float:right"><a href="./FAQ.php">Guide</a></li>  			
			<li style="float:right"><a class="active" href="../SigninUI.php">Back</a></li>
			<li style="float:left"><img src="../img/rushlogo2.png" alt="logo" height="7%"></li>
		</ul>
	</div>
	
<!--
<div class="left">
<img src="test2.jpg" width="40%" height="100%" />
</div>-->

<h1 style="margin-bottom:0;padding-left:15px;">Register Now!</h1>
<div class="left" style="margin-top:2%; padding-left:15px; margin-left:25px; ">

<form method="post" class="data" action="driver_reg.php"> 
<table border=0>
<tr>
<td>
NIC:</td><td>
<input type="text" id="Dnic" name="Dnic" size=12 placeholder="NIC number..."><br /></td></tr>
<tr>
<td>
First Name:</td><td>
<input type="text" id="Dfname" name="Dfname" size=15 placeholder="First name..."><br /></td></tr>
<tr>
<td>
Last Name:</td><td>
<input type="text" id="Dlname" name="Dlname" size=20 placeholder="Last name..."><br /></td></tr>
<tr>
<td>
Contact Number:</td><td>
<input type="text" id="Dtelno" name="Dtelno" size=10 placeholder="Contact number..."><br /></td></tr>
<tr>
<td>
License Number:</td><td>
<input type="text" id="Daddress" name="Dlicno" size=50 placeholder="License Number..."><br /></td></tr>
<tr>
<td>
Email:</td><td>
<input type="text" id="Demail" name="Demail" size=40 placeholder="Email address..."><br /></td></tr>
<tr>
<td>
Username:</td><td>
<input type="text" id="Duname" name="Duname" size=40 placeholder="Username..."><br /></td></tr>
<tr>
<td>
Password:</td><td>
<input type="password" id="Dpass" name="Dpass" minlength="8" placeholder="***********"></td></tr>

</table>


</div>



<div class="right" style="margin-top:2%; margin-left: 650px">
<table border=0>
<tr>
<td>
Vehicle Type:</td><td>
<select name="Vtype" style="width:112%; font-family:Trebuchet MS; padding:12px;">
						<option value="Car">Car</option>
					    <option value="Bicycle">Bicycle</option>
					    <option value="Three-wheeler">Three-wheeler</option>
					    <option value="Van">Van</option>
				   </select><br />
</td></tr>
<tr>
<td>
Vehicle Brand:</td><td>
<input type="text" id="Vbrand" name="Vbrand" placeholder="Vehicle Brand..." style=" width:112%;"><br /></td></tr>
<tr>
<td>
Vehicle Model:</td><td>
<input type="text" id="Vmodel" name="Vmodel" placeholder="Vehicle Model..." style=" width:112%;"><br /></td></tr>
<tr>
<td>
Vehicle Number:</td><td>
<input type="text" id="Vnumber" name="Vnumber" placeholder="Vehicle Number..." style=" width:112%;"><br /></td></tr>
</table>

<input type="reset" value="Refresh">
<input type="submit" name="submitbutton1" Value="Register">
</form>
</div>






</body>
</html>