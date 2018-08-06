<!DOCTYPE html>
<html>
<head>
	<title>Demo upload file</title>
</head>
<body>
	<form method="POST" action="uploadFile.php" enctype="multipart/form-data">
		<input type="file" name="uploadFileInput">
		<input type="submit" name="upload">
	</form>
	<?php
	if(isset($_POST['upload'])){
		$file = $_FILES['uploadFileInput']['tmp_name'];
		$path = "UploadFile/".$_FILES['uploadFileInput']['name'];
		if (is_uploaded_file($file)) {
			move_uploaded_file($file, $path);
			echo "Success";
		} else {
			echo "Error !";
		}
	}
	?>
</body>
</html>