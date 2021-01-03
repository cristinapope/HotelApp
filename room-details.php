<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
else
{
		include 'header2.php';
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id=$_GET['id'];

$sql="SELECT * from rooms WHERE id='".$id."'";
$result= mysqli_query($conn, $sql);

  if ($result) 
  {
		echo "<table>"; // start a table tag in the HTML
		if(mysqli_num_rows($result) != 0 )
		{
			
			
			while ($row = mysqli_fetch_array($result)) 
			{
				
				echo'
					<div class="container">

					<h1 class="title">Luxirious Suite</h1>



					 <!-- RoomDetails -->
           
							<div class="carousel-inner">
							<div class="item active"><img src="images/photos/'.$row['picture'].'" alt="picture"></div>
							 </div>
          
					<!-- RoomCarousel-->

					<div class="room-features spacer">
					 <div class="row">
					 <div class="col-sm-12 col-md-5"> 
					 <p>	  '.$row['facilities'].'</p>
					 </div>
   
					  <div class="col-sm-3 col-md-2">
					  <div class="size-price">Size<span>44 sq</span></div>
					  </div>
					  <div class="col-sm-3 col-md-2">
						<div class="size-price">Price<span>$'.$row['price'].'</span></div>
						</div>
					  </div>
					</div>
					</div>
					';
			}
		}
	}
	mysqli_close($conn);



 include 'footer.php';?>