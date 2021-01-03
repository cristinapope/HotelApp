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

$picture = $_FILES['fileToUpload']['name'];

//$picture = base64_encode(file_get_contents(addslashes($picture)));
//$id = $_POST['id'];  

$beds=$_POST['beds'];
$facilities= $_POST['mytextarea'];
$price = $_POST['price'];
$persons = $_POST['persons'];
$id = $_POST['id'];

 //$image = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
 
 $sql="INSERT INTO rooms (id,beds,price,persons,picture,facilities) VALUES ('$id','$beds','$price','$persons', '$picture', '$facilities')";
 
  if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		$last_id = $conn->insert_id;
		//echo $last_id;
		header('Location: view.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);

//$conn->close();

?>
