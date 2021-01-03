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
$status=$_REQUEST['mytextarea'];
$message= $_REQUEST['mytextarea2'];

$id = $_REQUEST['id'];

 //$image = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
 echo $id;
 $update="update reserves set status='".$status."',message='".$message."' where id='".$id."'"; 

  if (mysqli_query($conn, $update)) 
  {
		echo "record".$id." updated !";
		echo $id;
		$last_id = $conn->insert_id;
		//echo $last_id;
		header('Location: viewReservations.php');
  }
   else 
	 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);

//$conn->close();

?>
