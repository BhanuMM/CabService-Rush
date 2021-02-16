<?php
include "../conn.php";
session_start();
?>
<html>
<head>
<title>Book a ride</title>
<link rel="stylesheet" href="../css/ridestyle.css">
</head>


<body>


	<section>
    <div>
    <ul>
       <li style="float:right"><a href="../logout.php">Log out</a></li> 
      <li style="float:right"><a href="./FAQ.php">Guide</a></li>
      <li style="float:right"><a href="./RenterDashBoard.php">Back</a></li>
      <li style="float:left"><img src="../img/rushlogo2.png" alt="logo" height="40px"></li>
    </ul>
  </div>

</section>




	<center>
			<div class="card" style="padding-top:40px; float:left;">
				     <h1> Book a Ride </h1>
					 <p>Please add the following details to book a ride</p>
					<div class="list">
					<form method="post" action="bookride.php">
						Vehicle Type:<br />
						<select id="vtype" name="vtype" style="width:75%;margin:8px; font-family:Trebuchet MS;" value="<?php if (isset($_POST['vtype'])) echo $_POST['vtype']; ?>">
					    <option value="Car" <?php echo (isset($_POST['vtype']) && $_POST['vtype'] == 'Car') ? 'selected' : ''; ?>>Car</option>
					    <option value="Bicycle" <?php echo (isset($_POST['vtype']) && $_POST['vtype'] == 'Bicycle') ? 'selected' : ''; ?>> Bicycle</option>
					    <option value="Three-Wheeler" <?php echo (isset($_POST['vtype']) && $_POST['vtype'] == 'Three-Wheeler') ? 'selected' : ''; ?>>Three-wheeler</option>
					
					    <option value="Van" <?php echo (isset($_POST['vtype']) && $_POST['vtype'] == 'Van') ? 'selected' : ''; ?>>Van</option>
						</select><br />
						Pickup:<br />
						<input type="text" name="pick" id="pick" value="<?php if (isset($_POST['pick'])) echo $_POST['pick']; ?>" required/><br />
						Drop-Off:<br />
						
						<input type="text" name="drop" id="drop" value="<?php if (isset($_POST['drop'])) echo $_POST['drop']; ?>" required/><br />
						Distance (Km):<br />
						<input type="text" name="dis" id="dis" value="<?php if (isset($_POST['dis'])) echo $_POST['dis']; ?>" required/><br />
						Number of Passengers:<br />
						<input type="text" name="pas" id="pas" value="<?php if (isset($_POST['pas'])) echo $_POST['pas']; ?>"required/><br />
						Date:<br />
						<input type="date" name="date" id="date" value="<?php if (isset($_POST['date'])) echo $_POST['date']; ?>"required/><br /><br />
					
						<input style="width: 50%;" type="submit" name="submit" value="Book Ride">
						</form>
						
			</div>
	</center>

	<?php
$Runame = $_SESSION['uname'];

$sql1 = "SELECT RID FROM rider_det WHERE Runame = '$Runame'";
$result = mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result);

     $Rid = $row['RID'];
	 if(isset($_POST['vtype'])){
		$vtype= ($_POST['vtype']);  
	  
     
     $sql2 = "SELECT *  FROM v_available WHERE v_avail='YES' AND vtype='$vtype';";
     
     $result2=mysqli_query($conn,$sql2);
	 
     if (mysqli_num_rows($result2) > 0){
     $row=mysqli_fetch_assoc($result2);
     $avail_vehi=$row['VID'];
      
//---------------
$sql3 = "SELECT * FROM vehicle_det WHERE VID = '$avail_vehi'";
$result1 = mysqli_query($conn,$sql3);

$row2 = mysqli_fetch_array($result1);
     $Vid = $row2['VID'];
     $Did=$row2['DID'];
     $vnum=$row2['Vnumber'];
     $vmodel=$row2['Vmodel'];
     $vbrand=$row2['Vbrand'];
   
	 $sql4= "SELECT * FROM driver_det WHERE DID = '$Did'";
	 $result4 = mysqli_query($conn,$sql4);
	 
	 $row4 = mysqli_fetch_array($result4);	 
	 $drifname=$row4['Dfname'];
	 $drilname=$row4['Dlname'];
	 $check="YES";

	//  calculating fee
$carpkm=60;
$tukpkm=35;
$bikepkm=20;
$vanpkm=80;
$dis = ($_POST['dis']);

if ($vtype=="Bicycle" ){
	$fee=$dis*$bikepkm;
}
if($vtype=="Three-Wheeler"){
	$fee=$dis*$tukpkm;
}
if($vtype=="Car"){

	$fee=$dis*$carpkm;
}
if($vtype=="Van"){
	$fee=$dis*$vanpkm;
}


     if (mysqli_query($conn, $sql3)) {
      // echo "New record successfully";
      //echo '<script> alert("Success!");</script>';
      // echo '<script> location.href="RenterDashBoard.php"</script>';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }else{
	  $drifname="No vehicles Available";
	  $drilname="";
	  $vnum=" ";
	  $vbrand=" ";
	  $vmodel=" ";
	  $fee=null;
    // echo '<script> location.href="bookride.php"</script>';
  }
}
mysqli_close($conn);
?>

	<center>
	
	<div class="card" style="float:left; height:60%; width:20%; margin-top:50px; margin-left:12%; ">
			<h2 style="margin-top:15px;">Vehicle Type</h2>
			<h3><?php if(isset($_POST['vtype'])){
          echo $vtype;  
        }?></h3>
			<h2 >Driver Name</h2>
			<h3><?php if(isset($_POST['vtype'])){
          echo $drifname." ".$drilname;  
        }?>
</h3>
			<h2 >Vehicle Number</h2>
			<h3><?php if(isset($_POST['vtype'])){
          echo $vnum;  
        }?> </h3>
			<h2 >Vehicle Brand & Model</h2>
			<h3><?php if(isset($_POST['vtype'])){
          echo $vbrand." ". $vmodel;  
        }?> </h3>
	</div>
	</center>
<center>
	<div class="card" style="padding-top:00px; height:20%; float:left">
			 <p></p>
			<div class="list">
			<form method="post" action ="confirmride.php">
				<p>You will be charged Rs.<?php if(isset($_POST['vtype'])){
          echo $fee;  
        }?> for this ride. </p>
				<table>
				<tr><td>
				<input type="hidden" name="vid" value="<?php if(isset($_POST['vtype'])){
          echo $Vid;  
        }?>">
				<input type="hidden" name="did" value="<?php if(isset($_POST['vtype'])){
          echo $Did;  
        }?>">
				<input type="hidden" name="rid" value="<?php if(isset($_POST['vtype'])){
          echo $Rid;  
        }?>">
		<input type="hidden" name="1pick" value="<?php if(isset($_POST['vtype'])){
          echo $_POST['pick'];  
        }?>">
		<input type="hidden" name="1drop" value="<?php if(isset($_POST['vtype'])){
          echo $_POST['drop'];  
        }?>">
		<input type="hidden" name="1dis" value="<?php if(isset($_POST['vtype'])){
          echo $_POST['dis'];  
        }?>">
		<input type="hidden" name="1pas" value="<?php if(isset($_POST['vtype'])){
          echo $_POST['pas'];  
        }?>">
		<input type="hidden" name="1date" value="<?php if(isset($_POST['vtype'])){
          echo $_POST['date'];  
        }?>">
		<input type="hidden" name="fee" value="<?php if(isset($_POST['vtype'])){
          echo $fee;  
        }?>" >
		<input type="hidden" name="check" value="<?php if(isset($_POST['vtype'])){
          echo $check;  
        }?>" >
				<input type="submit" name="submit8" value="Confirm Ride"></td><td>
				<input type="reset" name="cancelride" value="Cancel" onclick="cancelbtn()"></td></tr>
				</table>
				</form>
	</div>
</center>
	
	
<script>
function cancelbtn(){
	var r = confirm("Are You sure You want to cancel ride?");
if (r == true) {
	location.href="RenterDashboard.php"
} 
}
</script>


         <div class="footer">
 		 <p style="color: white; margin: 5px; font-family: Trebuchet MS;">Copyright &#169; 2021 - Group 12. All rights reserved.</p>
     <p style="color: white; margin: 5px; font-family: Trebuchet MS;">Emergency Contact: 5678</p>
	</div>

</body>
</html>






