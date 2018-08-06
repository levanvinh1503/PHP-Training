<?php
if(isset($_POST['uploadAjax'])){
    $fileName = $_FILES['uploadFileInputAjax']['tmp_name'];
    $pathLocation = "UploadFile/".$_FILES['uploadFileInputAjax']['name'];
    if (is_uploaded_file($fileName)) {
        move_uploaded_file($fileName, $pathLocation);
        echo "Upload File Success !";
    } else {
        echo "Upload File Error !";
    }
}
