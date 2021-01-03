
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=DM Serif Text' rel='stylesheet'>
<link rel="stylesheet" href="../css/public.css">
<link rel="stylesheet" href="../css/form.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider.min.js"></script>
<script scr="../scripts/index.js"></script>
  </head>

  
  <body>
   
   <h1>Add room</h1>
    <form method="post" action="insert.php" enctype="multipart/form-data">
      <?php printf("<input type=\"hidden\" name=\"userId\" value=\"%u\" />", $_GET['userId']); ?>
      
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="textm" name="movieName" placeholder="Enter movie name" id="movieName">
      <textarea id="mytextarea" name="mytextarea" placeholder="Enter movie description"></textarea>
      <input type="submit" value="Add room" name="submit">
       </div>
       </div>
    </form>
  </body>
  
</html>
