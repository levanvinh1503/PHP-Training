<!DOCTYPE html>
<html>
<head>
    <title>Demo upload file Ajax</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" id="formUpload">
        <input type="file" name="uploadFileInputAjax">
        <input type="submit" name="uploadAjax">
    </form>
    <div class="progress" style="width: 310px;position: relative;border: 1px solid;margin-top: 10px">
        <div class="bar" style="height: 16px;position: absolute;background: green;z-index: -1"></div >
        <div class="percent" style="text-align: center">0%</div >
    </div>

    <div class="result">Result: </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    <script>
        $(function() { 
            var percent = $(".percent");
            $("#formUpload").ajaxForm({
                url: 'functionUploadAjax.php', 
                type: 'post',
                dataType: 'html',
                beforeSend: function() {
                    $(".bar").width("0%");
                    $(".result").html();
                },
                uploadProgress: function(event) {
                    var percentVal = event.loaded / event.total *100 + "%";
                    console.log(percentVal);
                    $(".bar").width(percentVal);
                    $(".percent").html(percentVal);
                },
                complete: function(data) {
                    console.log(data);
                },
                success: function(result) {
                    $(".result").append(result);
                }
            });
        });
    </script>
</body>
</html>