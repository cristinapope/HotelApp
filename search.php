<?php include 'header2.php';
$beds = $_POST['beds'];
$persons = $_POST['persons'];
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

$sql="SELECT * from rooms where (beds=".$beds." or persons=".$persons.")";

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
			  <div class="info"><h3>Luxirious Suite</h3><p>'.$row['facilities'].'</p>';
			echo'<p>Price:'.$row['price'].'</p>';
			echo'<p>Beds:'.$row['beds'].'</p>';
				 echo'<a href="room-details.php" class="btn btn-default">Check Details</a>
			  </div>
			  </div>
			  </div>';
			}
			echo "</table>"; //Close the table in HTML
			}
	} 
	else
	 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 //Make sure to close out the database connection
	 mysqli_close($conn);
		
?>