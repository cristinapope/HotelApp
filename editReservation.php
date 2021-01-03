<?php
include 'header3.php';
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
$sql="SELECT * from reserves where id=".$id.";";
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
    <form method="post" action="editR.php?id=<?php echo $id;?>;" enctype="multipart/form-data">
            
     
      <select class="form-control" name="mytextarea" id="mytextarea">
              <option>status</option>
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

				$sql="SELECT * from statuss";
				$result= mysqli_query($conn, $sql);

				if ($result) 
				 {
					
					if(mysqli_num_rows($result) != 0 )
					{
			
			
						while ($row = mysqli_fetch_array ($result)) 
						{
							echo'<option>'. $row['status'] .' </option>';
						}
					}
				} 
				else
				{
					echo "Error: " . $sql . " " . mysqli_error($conn);
				 }
	 //Make sure to close out the database connection
				 mysqli_close($conn);
					 ?>
		   </select>
	 <textarea id="mytextarea2" name="mytextarea2" placeholder="upload message" value="<?php echo $row['message'];?>"></textarea>
	 
      <input type="submit" name value="Edit reservation" name="submit">
       </div>
       </div>
    </form>
  </body>
  
</html>
<?php
}}}
?>
