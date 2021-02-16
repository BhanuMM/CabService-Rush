<?php 
include "../conn.php";
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link rel="stylesheet" href="../css/driverstyleDash.css" />
    <title>RenterDash</title>
  </head>

  <body>

<section>
    <div>
    <ul>
       <li style="float:right"><a href="../logout.php">Log out</a></li> 
      <li style="float:right"><a href="./FAQ.php">Guide</a></li>
      <li style="float:right"><a href="./RiderSettings.php">Account Settings</a></li>
      <li style="float:right"><a href="./renttrip.php">Trip History</a></li>
      <li style="float:right"><a class="active" href="./RenterDashBoard.php">Dashboard</a></li>
      <li style="float:left"><img src="../img/rushlogo2.png" alt="logo" height="40px"></li>
    </ul>
  </div>

</section>





<section>
    <div class="left">
      <h2 id="header1">Hello, <?php
        if(isset($_SESSION["uname"])){
          echo  $_SESSION["uname"];
        }
  ?></h2>
      <img src="../img/rushlogo1.png" alt="taxi.logo" id="logo" />
      <h1 style="margin-bottom: 28px; margin-left: 100px;" id="header2">Rush is at your service...</h1>


      <?php
        if(isset($_SESSION["uname"])){
          $uname=$_SESSION["uname"];

          $getrid = "SELECT RID FROM rider_det WHERE Runame='$uname'";
          $result1 = mysqli_query($conn, $getrid);
          $row = mysqli_fetch_array($result1);
          $rid= $row['RID'];

          $sql = "SELECT * FROM trip_det WHERE RID='$rid' AND is_completed='NO'";

          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {

          echo ('<h1 id="header3" style="color:red;">---You Have an Ongoing trip on progress---</h1>');
        
        }
     }
  ?>

      <h1 id="header3">We offer you a quick and safe ride, 24/7.</h1>
    </div>
    <div class="right">
    <div class="layer"> </div>

  <br /><br /><br />
  
  <button class="button" id="RenterFixRide" onclick="location.href='./bookride.php'" type="button" >
        <font color=white>Fix a Ride</font></button><br />
        
      <button class="button" id="RenterTripDetails" onclick="location.href='./renttrip.php'" type="button">
       <font color=white>Trip History</font></button><br />

      <button class="button" id="RenterSettings" onclick="location.href='./RiderSettings.php'" type="button">
       <font color=white>Account Settings</font>
      </button>
<br>
<br>
    </div> </section>

         <div class="footer">
 		 <p style="color: white; margin: 5px; font-family: Trebuchet MS;">Copyright &#169; 2021 - Group 12. All rights reserved.</p>
     <p style="color: white; margin: 5px; font-family: Trebuchet MS;">Emergency Contact: 5678</p>
	</div>


  <?php
        if(isset($_SESSION["uname"])){
          $uname=$_SESSION["uname"];
          $getrid = "SELECT RID FROM rider_det WHERE Runame='$uname'";
          $result1 = mysqli_query($conn, $getrid);
          $row = mysqli_fetch_array($result1);
          $rid= $row['RID'];

          $sql = "SELECT * FROM trip_det WHERE RID='$rid' AND is_completed='NO'";

          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {

            echo '<script> document.getElementById("RenterFixRide").disabled = true;</script>';
             
        }
     }
  ?>

  </body>
</html>
