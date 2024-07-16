<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
  Select file to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload File" name="submit">
</form>

</body>
</html>

<?php

// Check if the form has been submitted
if(isset($_POST['submit'])) {
  
  // Specify the directory where the file will be uploaded
  $target_dir = "book notes";

  // Get the name of the uploaded file
  $filename = basename($_FILES["fileToUpload"]["name"]);

  // Specify the path where the file will be uploaded
  $target_file = $target_dir . $filename;

  // Check if the file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
  } else {
    // Upload the file
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file " . $filename . " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}
?>
