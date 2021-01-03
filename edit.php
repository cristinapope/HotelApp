<?php include 'header3.php';
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
$id = $_REQUEST['id'];
$sql="SELECT * from rooms where id=".$id.";";
$result= mysqli_query($conn, $sql);

  if ($result) 
  {
		echo "<table>"; // start a table tag in the HTML
		if(mysqli_num_rows($result) != 0 )
		{
			
			
			while ($row = mysqli_fetch_array ($result)) 
			{
			
?>

<!DOCTYPE html>

  <body>
   
   <h1>Edit room</h1>
    <form method="post" action="editRoom.php?id=<?php echo $id;?>;" enctype="multipart/form-data">
     <?php  echo "<img src='images/photos/".$row['picture']."' alt='error'>";?>     
      <input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $row['picture'];?>">
      <input type="textm" name="beds" placeholder="Enter beds number" id="beds" value="<?php echo $row['beds'];?>">
	  <input type="textm" name="price" placeholder="Enter price" id="price" value="<?php echo $row['price'];?>">
	  <input type="textm" name="persons" placeholder="Enter persons number" id="persons" value="<?php echo $row['persons'];?>">
      <textarea id="mytextarea" name="mytextarea" placeholder="Enter room facilities" value="<?php echo $row['facilities'];?>"></textarea>
      <input type="submit" value="Edit room" name="submit">
       </div>
       </div>
    </form>
  </body>
  
</html>
<?php
}}}
?>
<?php
?>