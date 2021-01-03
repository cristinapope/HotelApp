<?php
	
	session_start();
	
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
	{
	header('login.php');
   
	}
	else{
	if($_SESSION["id"] == 3)
	{
	 echo("Access denied");
	 header('index.php');
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

$sql="SELECT * from reserves where username ='".$_SESSION["username"]."'";
$result= mysqli_query($conn, $sql);

  if ($result) 
  {
		echo "<table>"; // start a table tag in the HTML
		if(mysqli_num_rows($result) != 0 )
		{
			
			echo(" <h1>Your reserved rooms:</h1>");
			while ($row = mysqli_fetch_array ($result)) 
			{
						
			if($row['status']=='accepted')
				{
					echo "
					<br /> Number of nights: ".$row['nights']. "
					<br /> Message: ".$row['message']. "
					<br /> Status: ".$row['status']. "
					<br /> Date: ".$row['startdat']. "|" .$row['startmonth']. "|". $row['startyear']. "
					<br />";
		
					echo "</table>"; //Close the table in HTML
				}
			
				else
				{
					
					echo "
					<br /> Number of nights: ".$row['nights']. "
					<br /> Message: ".$row['message']. "
					<br /> Status: ".$row['status']. "
					<br /> Date: ".$row['startdat']. "|" .$row['startmonth']. "|". $row['startyear']. "
					<br />";
		
					echo "</table>"; //Close the table in HTML
				}
			}
		}
	} 
	else
	 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 //Make sure to close out the database connection
	 mysqli_close($conn);
include 'footer.php';		
?>