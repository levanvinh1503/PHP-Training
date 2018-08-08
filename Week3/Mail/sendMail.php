<!DOCTYPE html>
<html>
<head>
    <title>Demo send email with mb_send_mail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Send Email</h2>
        <form method="POST" id="formEmail">
            <label>To: </label>
            <input class="form-control" type="email" name="sendTo">
            <br>
            <label>Subject: </label>
            <input class="form-control" type="text" name="subjectEmail">
            <br>
            <label>Message: </label>
            <textarea class="form-control" name="contentEmail"></textarea>
            <br>
            <input class="btn" type="submit" name="submitFormEmail" value="Send">
        </form>
        <div class="result"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function() { 
            $("#formEmail").submit(function(event){
                event.preventDefault();
                $.ajax({
                    url: "functionSendEmail.php",
                    data: $("#formEmail").serialize(),
                    type: "POST",
                    success: function(data) {
                        $(".result").html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>