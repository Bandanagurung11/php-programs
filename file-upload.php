<html>
<head>
<title>File upload in PHP</title>
</head>
<body>
<form actio="file-upload.php" method="post" enctype="multipart/form-data">
Select your file <input type="file" name="uplfile"><br>
<input type="submit" value="Upload" name="btnUpload">
</form>
</body>
</html>
 
<?php

if(isset($_POST["btnUpload"]))
{
	
	if(move_uploaded_file($_FILES["uplfile"]["tmp_name"],
	                         time().$_FILES["uplfile"]["name"]))
	{
		echo "File uploaded";

	}
	else
	{
		echo "file upload fail";
	}
	
}

?>