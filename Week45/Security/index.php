<!DOCTYPE html>
<html>
<head>
    <title>Demo Security</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form id="form-login" method="POST">
            <div class="form-group">
                <label>Username:</label>
                <input class="form-control" type="text" name="username-login">
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input class="form-control" type="password" name="password-login">
            </div>
            <div class="form-group">
                <input class="btn" type="submit" name="submit-login" value="Login">
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function() { 
            $("#form-login").submit(function (eventSubmit) {
                eventSubmit.preventDefault();
                $.ajax({
                    url: "loginSecurity.php",
                    data: $("#form-login").serialize(),
                    type: "POST",
                    success: function(dataResult) {
                        if (dataResult == 'true') {
                            window.location.href="listProduct.php";
                        } else {
                            alert(dataResult);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>