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
        $fileName = $_FILES['uploadFileInput']['tmp_name'];
        $pathLocation = "UploadFile/".$_FILES['uploadFileInput']['name'];
        
        if (is_uploaded_file($fileName)) {
            move_uploaded_file($fileName, $pathLocation);
            echo "Success";
        } else {
            echo "Error !";
        }
    }
    ?>
</body>
</html>