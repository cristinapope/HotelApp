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

$id=$_GET['id'];
$result = mysqli_query($conn,'DELETE FROM rooms WHERE id="'.$id.'"');
mysqli_close($conn);
header("Location: view.php");

?>