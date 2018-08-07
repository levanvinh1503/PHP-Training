<!DOCTYPE html>
<html>
<head>
    <title>Session DB1</title>
</head>
<body>
    <form method="POST" id="FormSessionDB1">
        <label>ID Session</label>
        <input type="text" name="idSessionDB1">
        <label>Value Session</label>
        <input type="text" name="valueSession">
        <input type="submit" name="submitCreateSession" value="Create session">
    </form>
    <div class="result"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function() { 
            $("#FormSessionDB1").submit(function(event){
                event.preventDefault();
                $.ajax({
                    url: "functionSessionDB1.php",
                    data: $("#FormSessionDB1").serialize(),
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