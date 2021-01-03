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
		header('login.php');
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

$sql="SELECT * from reserves ";
$result= mysqli_query($conn, $sql);

  if ($result) 
  {
		echo "<table>"; // start a table tag in the HTML
		if(mysqli_num_rows($result) != 0 )
		{
			
			echo(" <h1>Pending reservations:</h1>");
			while ($row = mysqli_fetch_array ($result)) 
			{
			
			echo "<br /> ID: " .$row['id']. "
			<br /> Name of the person who wishes to reserve the room: ".$row['name']. "
			<br /> Number of nights: ".$row['nights']. "
			<br /> Message: ".$row['message']. "
			<br /> Status: ".$row['status']. "
			<br /> Username author: ".$row['username']. "
			<br /> Date: ".$row['startdat']. "|" .$row['startmonth']. "|". $row['startyear']. "
			<br />";
			echo'<p> <a href="editReservation.php?id='. $row["id"]. ';">Edit</a></td class="btn"> | <a href="delete.php?id='. $row["id"]. ';">Delete</a></td class="btn"></p>';
			
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
include 'footer.php';		
?>