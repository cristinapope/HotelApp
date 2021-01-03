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
?>

<?php
$name=$_POST['name'];
$nights=$_POST['nights'];
$persons=$_POST['persons'];
$phone=$_POST['phone'];
$room=$_POST['room'];
$startdat=$_POST['startdat'];
$startmonth=$_POST['startmonth'];
$startyear=$_POST['startyear'];
$message=$_POST['message'];

 
 $sql="INSERT INTO reserves (name,nights,phone,room,persons,startdat,startmonth,startyear,message,status,id,username) VALUES ('$name','$nights','$phone','$room','$persons', '$startdat', '$startmonth','$startyear','$message','pending','','" .$_SESSION["username"]. "' )";
 
  if (mysqli_query($conn, $sql)) {
		
		header('Location: viewReservationsUser.php');
		$last_id = $conn->insert_id;
		//echo $last_id;
		
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);

//$conn->close();

?>
