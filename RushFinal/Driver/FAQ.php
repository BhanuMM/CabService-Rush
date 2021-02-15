<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/faq.css">
</head>
<body>

	<div>
		<ul>
			<li style="float:right"><a href="../logout.php">Log out</a></li>
  			<li style="float:right"><a href="./FAQ.php">Guide</a></li>
  			<li style="float:right"><a href="./DriverSettings.php">Account Settings</a></li>
			<li style="float:right"><a href="./drivtrip.php">Trip History</a></li>
			<li style="float:right"><a href="./DriverDashBoard.php">Back</a></li>
			<li style="float:left"><img src="../img/rushlogo2.png" alt="logo" height="40px"></li>
		</ul>
	</div>

<center>
<h1>Guide</h1> </center>

<button class="accordion"><h3>Fixing A ride.</h3></button>
<div class="panel">
  <p>When fixing a ride, you can always check the avilability status of the vehicles with us, 
without registering. <br /> <br /> <b>Home -> Check availability</b><br /> <br />To book a ride you have to be registered first. </p>
<p>To register, 
	<ol>
	<li>Go to the registration page. <br /> <br /><b>Home -> Sign in -> Rider -> Register here</b></li> <br /><br /><br /><br />
	<li>Fill the necessary fields.</li><br /><br />
	<li>Accept the terms and conditions.</li><br /><br />
	<li>Submit the registration form.</li><br />
	</ol>
<p>If you are a registered member of our service, please sign up with your account to Fix a ride.</p>
<b>Home -> Sign in -> Rider</b>
<p>Use the trip details button to access details of your past trips.</p>
<p>You can change your user account settings by clicking the Account Settings button.</p>
</div>

<button class="accordion"><h3>Registering as a driver.</h3></button>
<div class="panel">
  <p>Rush offers this chance to join with our network and earn. To register as a driver follow the instructions.</p>
<p>To register, 
	<ol>
	<li>Go to the registration page. <br /><br /><b>Home -> Sign in -> Driver -> Register</b></li><br /><br /><br /><br />
	<li>Fill the necessary fields of personal details.</li><br /><br />
	<li>Fill the necessary fields of your vehicle details.</li><br /><br />
	<li>Accept the terms and conditions.</li><br /><br />
	<li>Submit the registration form.</li><br />
	</ol>
<p>If you are a registered member of our service as a driver, please sign up
	with your account to inspect your trip details.</p> <b>Home -> Sign in -> Driver</b>
<p>Please check the box of completion after you complete your ride and received payments.</p>
<p>You can change your user account settings by clicking the Account Settings button.</p>
</div>

<button class="accordion"><h3>FAQ<h3></button>
<div class="panel">
	<button class="accordion2"><h3>How to contact Us in an emergency.</h3></button>
	<div class="panel2">
	<p style="margin-left: 0%;">In our Home page we have displayed our office contact numbers.
	You can find our hotline at the bottom of each page, including this.</p>
	</div>
	<button class="accordion2"><h3>Who can view my profile.</h3></button>
	<div class="panel2">
	<p>Unless requested with a court order, only the user can view most of account details.</p>
	<p>According to the necessity, Admin can view the contact number and address. </p>
	<p>Your rider can see your User Name.</p>
	</div>
	<button class="accordion2"><h3>What is Rush.</h3></button>
	<div class="panel2">
	<p>Rush is a upcoming vehicle renting service that provide service 24/7. We assure you about the safety and credibility of our riders and 
		always takes your safety as our highest responsibility and concern.
	</p>
    </div>
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

<script>
	var acc = document.getElementsByClassName("accordion2");
	var i;
	
	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panel2 = this.nextElementSibling;
		if (panel2.style.display === "block") {
		  panel2.style.display = "none";
		} else {
		  panel2.style.display = "block";
		}
	  });
	}
	</script>


<div class="footer">
 		 <p style="color: white;">Copyright © 2021 - Group 12. All rights reserved.</p>
 		 <p style="color: white;">Emergency</p>
	</div>

</body>
</html>