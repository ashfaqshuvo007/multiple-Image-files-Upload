<?php 

include 'upload.php';
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Multiple Images Upload</title>
	</head>
	<body>
		<!--Image Upload Form -->
		<form action="upload.php" method="post" enctype="multipart/form-data">
			<h3>Select Images</h3>
			<h5 style="color: red">* Only jpg, jpeg, png</h5>
			<input type="file" name="files[]" multiple>
			<input type="submit" name="submit" value="Submit">
		</form>

	</body>
</html>