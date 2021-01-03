<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}

//$picture = base64_encode(file_get_contents(addslashes($picture)));
//$id = $_POST['id'];  
$beds=$_REQUEST['beds'];
$facilities= $_REQUEST['mytextarea'];
$price = $_REQUEST['price'];
$persons = $_REQUEST['persons'];
$id = $_REQUEST['id'];

 //$image = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
 echo $id;
 $update="update rooms set beds='".$beds."',facilities='".$facilities."', price='".$price."',persons='".$persons."' where id='".$id."'"; 

  if (mysqli_query($conn, $update)) 
  {
		echo "record".$id." updated !";
		echo $id;
		$last_id = $conn->insert_id;
		//echo $last_id;
		header('Location: view.php');
  }
   else 
	 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);

//$conn->close();

?>
