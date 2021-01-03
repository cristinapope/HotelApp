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

$i=$_GET['id'];
$result = mysqli_query($conn,'DELETE FROM reserves WHERE id='.$i.';');
mysqli_close($conn);
header("Location: viewReservations.php");

?>