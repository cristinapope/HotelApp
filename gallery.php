<?php 
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
     include 'header.php';
    
}
else
{
	if($_SESSION["id"] == 3)
	{
	 include 'header3.php';
	}
	else
	{
		include 'header2.php';
	}
}
?>
<?php
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

$sql="SELECT * from rooms";
$result= mysqli_query($conn, $sql);

  if ($result) 
  {
		echo "<table>"; // start a table tag in the HTML
		if(mysqli_num_rows($result) != 0 )
		{
			
			echo '<h1 class="title">Gallery</h1>
				 <div class="row gallery">';
			while ($row = mysqli_fetch_array ($result)) 
			{
						
			//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['picture'] ).'"/>';	
			//echo "<br /> ID: " .$row['id']. "
			//<br /> Number of persons: ".$row['persons']. "
			//<br /> Number of beds: ".$row['beds']. "
			//<br /> Price/night: ".$row['price']. "
			//<br /> facilities: ".$row['facilities']. "<br />";
			
			echo'
					<div class="col-sm-4 wowload fadeInUp">
					<a href="images/photos/'.$row['picture'].'" title="pic" class="gallery-image" data-gallery>
					<img src="images/photos/'.$row['picture'].'" class="img-responsive">
					</a>
					</div>
					</div>
					</div>
					';
			echo "</table>"; //Close the table in HTML
			}
			echo'</div></div>';
		}
	} 
	else
	 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 //Make sure to close out the database connection
	 mysqli_close($conn);
	?>	

