<?php
session_start();
	
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
	{
    include 'header.php';
   
	}
	else{
	if($_SESSION["id"] == 3)
	{
	 include 'header3.php';
	}
	else
	{
		include 'header2.php';
	}
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

$sql="SELECT * from rooms ORDER BY price";
$result= mysqli_query($conn, $sql);

  if ($result) 
  {
		echo "<table>"; // start a table tag in the HTML
		if(mysqli_num_rows($result) != 0 )
		{
			
			
			while ($row = mysqli_fetch_array ($result)) 
			{
						
			//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['picture'] ).'"/>';	
			//echo "<br /> ID: " .$row['id']. "
			//<br /> Number of persons: ".$row['persons']. "
			//<br /> Number of beds: ".$row['beds']. "
			//<br /> Price/night: ".$row['price']. "
			//<br /> facilities: ".$row['facilities']. "<br />";
			
			echo'
			  <div class="col-sm-6 wowload fadeInUp">
			  <div class="rooms">
			  <img src="images/photos/'.$row['picture'].'" class="img-responsive">
			  <div class="info"><h3>Description:</h3><p>'.$row['facilities'].'</p>';
			  echo'<p>Price:'.$row['price'].'</p>';
			echo'<p>Beds:'.$row['beds'].'</p>';
			 echo'<p>No of the room:'.$row['id'].'</p>';
			 if($_SESSION['id'] == 3)
			  {
				echo'<a href="edit.php?id='. $row["id"]. '" class="btn btn-default">Edit Details</a>';
				echo'<a href="deleteRoom.php?id='. $row["id"]. '" class="btn btn-default">Delete Room</a>
			  </div>
			  </div>
			  </div>';
			  }
			else
			{
				echo'<p> <a href="room-details.php?id='. $row["id"]. ';">Check Details</a></td class="btn"></p>
				
			  </div>
			  </div>
			  </div>';
			}
			echo "</table>"; //Close the table in HTML
			}
		}
	} 
	else
	 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 //Make sure to close out the database connection
	 mysqli_close($conn);
		
?>