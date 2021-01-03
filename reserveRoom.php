<?php include 'view.php';?>

<!-- reservation-information -->
 
 <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
 
<p>Date: <input type="text" id="datepicker"></p>
 
 
</body>
</html>
<div class="col-sm-5 col-md-4">
<h3>Reservation</h3>
    <form role="form" method="post" action="reserve.php" enctype="multipart/form-data" class="wowload fadeInRight">
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Name" name="name" id="name">
        </div>
        <div class="form-group">
            <input type="nights" class="form-control"  placeholder="No of nights" name="nights" id="nights">
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control"  placeholder="Phone" name="phone" id="phone">
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control" name="room" id="room">
              <option>No. of the room</option>
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

				$sql="SELECT * from rooms";
				$result= mysqli_query($conn, $sql);

				if ($result) 
				 {
					
					if(mysqli_num_rows($result) != 0 )
					{
			
			
						while ($row = mysqli_fetch_array ($result)) 
						{
							echo'<option>'. $row['id'] .' </option>';
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
            </div>        
            <div class="col-xs-6">
            <select class="form-control" name="persons" id="persons">
              <option>No. of Pers</option>
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

				$sql="SELECT * from rooms";
				$result= mysqli_query($conn, $sql);

				if ($result) 
				 {
					
					if(mysqli_num_rows($result) != 0 )
					{
			
			
						while ($row = mysqli_fetch_array ($result)) 
						{
							echo'<option>'. $row['persons'] .' </option>';
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
			
            </select>
            </div>        
            </div></div>
			
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="startdat" id="startdat">
                <option>Date</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="startmonth" id="startmonth">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control" name="startyear" id="startyear">
               
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control"  placeholder="Message" name="message" id="message" rows="4"></textarea>
        </div>
	
        <button class="btn btn-default">Submit</button>
    </form>    
</div>
</div>  
</div>
</div>
<!-- reservation-information -->
 
