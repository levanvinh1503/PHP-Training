<!DOCTYPE html>
<html>
<head>
    <title>Session DB2</title>
</head>
<body>
    <form method="POST" id="FormSessionDB2">
        <label>ID Session</label>
        <input type="text" name="idSessionDB2">
        <input type="submit" name="submitReadSession" value="Read session">
    </form>
    <div class="result"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function() { 
            $("#FormSessionDB2").submit(function (eventSubmit) {
                eventSubmit.preventDefault();
                $.ajax({
                    url: "functionSessionDB2.php",
                    data: $("#FormSessionDB2").serialize(),
                    type: "POST",
                    success: function(dataResult) {
                        $(".result").html(dataResult);
                    }
                });
            });
        });
    </script>
</body>
</html>