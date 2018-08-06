<!DOCTYPE html>
<html>
<head>
    <title>Demo Ajax</title>
</head>
<body>
    <form method="POST" id="formArray" enctype="multipart/form-data">
        <label>Array: </label>
        <input type="text" name="arrayNumber" required="">
        <input type="submit" name="submitArray">
    </form>
    <div class="result">Result: </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function() { 
            $("#formArray").submit(function(event){
                event.preventDefault();
                $.ajax({
                    url: "functionArrayAjax.php",
                    data: $("#formArray").serialize(),
                    type: "POST",
                    success: function(data) {
                        console.log(data);
                        $(".result").append(data);
                    }
                });
            });
        });
    </script>
</body>
</html>