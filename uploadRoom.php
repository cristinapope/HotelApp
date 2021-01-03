<?php include 'header3.php';?>

<!DOCTYPE html>

  <body>
   
   <h1>Add room</h1>
    <form method="post" action="insert.php" enctype="multipart/form-data">
            
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="textm" name="beds" placeholder="Enter beds number" id="beds">
	  <input type="textm" name="id" placeholder="Enter room number" id="id">
	  <input type="textm" name="price" placeholder="Enter price" id="price">
	  <input type="textm" name="persons" placeholder="Enter persons number" id="persons">
      <textarea id="mytextarea" name="mytextarea" placeholder="Enter room facilities"></textarea>
      <input type="submit" value="Add room" name="submit">
       </div>
       </div>
    </form>
  </body>
  
</html>
