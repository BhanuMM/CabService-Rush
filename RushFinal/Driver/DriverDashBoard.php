<?php 
include "../conn.php";
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link rel="stylesheet" href="../css/driverstyleDash.css" />
    <title>Driverash</title>

  </head>

  <body>
<section>
    <div>
    <ul>
      <li style="float:right"><a href="../logout.php">Log out</a></li> 
      <li style="float:right"><a href="./FAQ.php">Guide</a></li>
      <li style="float:right"><a href="./DriverSettings.php">Account Settings</a></li>         
      <li style="float:right"><a href="./drivtrip.php">Trip History</a></li>
      <li style="float:right"><a class="active" href="./DriverDashBoard.php">Dashboard</a></li>
      <li style="float:left"><img src="../img/rushlogo2.png" alt="logo" height="40px"></li>
    </ul>
  </div>

</section>


<section>
    <div class="left">
      <h2 style="margin-bottom: 20px;" id="header1">Hello, <?php
        if(isset($_SESSION["uname"])){
          echo  $_SESSION["uname"];
        }
  ?></h2>

 
<img src="../img/rushlogo1.png" alt="taxi.logo" id="logo" />


 <!-- <p class="onoff"><input type="checkbox" value="1" id="checkboxID2"><label for="checkboxID2"></label></p>
 -->
<div class="checktext">
  <br /> <br />
 <h1 style="margin-top: 20px; margin-left: 100px;color:white;"> Welcome To the Driver Dashboard.</h1> <br />
 <?php
        if(isset($_SESSION["uname"])){
          $uname=$_SESSION["uname"];

          $getdid = "SELECT DID FROM driver_det WHERE Duname='$uname'";
          $result1 = mysqli_query($conn, $getdid);
          $row = mysqli_fetch_array($result1);
          $did= $row['DID'];

          $sql = "SELECT * FROM trip_det WHERE DID='$did' AND is_completed='NO'";

          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {

          echo ('<h1  style="color:red;">-You Have an Ongoing trip on progress-</h1>');


  echo ('<form method="post" action="./tripcomp.php">
  <input type="checkbox" id="tripcomp" name="tripcomp" value="comp">
  <label for="Trip_comp" style="font-size:34px; color:white;"> Trip Completed </label><br>
  <input type="submit" name="submitbutton1" Value="Update" style="width:175px; margin-left:75px; margin-right: 10px">
</form>');
   
  }
} 
?>
</div>

   
    </div>
<div class="right">
    <div class="layer"> </div>

<br /> <br /> <br /> <br /> <br /> <br /><br /> <br />

      <button class="button" id="DriverTripDetails" onclick="location.href='./drivtrip.php'" type="button">
       <font color=white>Trip History</font></button><br />

      <button class="button" id="DriverSettings" onclick="location.href='./DriverSettings.php'" type="button">
       <font color=white>Account Settings</font>
      </button>
   
<br /><br /><br /><br /><br /><br />
    </div> </section>


<section>

         <div class="footer">
 		 <p style="color: white;  margin: 5px; font-family: Trebuchet MS;">Copyright &#169; 2021 - Group 12. All rights reserved.</p>
     <p style="color: white;  margin: 5px; font-family: Trebuchet MS;">Emergency Contact: 5678</p>
	</div>
  </body>
</html>