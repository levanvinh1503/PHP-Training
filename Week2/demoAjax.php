<!DOCTYPE html>
<html>
<head>
    <title>Demo Ajax</title>
</head>
<body>
    <button id="clickAjax">Click</button>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#clickAjax').click(function(event) {
                event.preventDefault();
                $.ajax({
                    success: function(data) {
                        alert("OK");
                    }
                });
            });
        });
    </script>
</body>
</html>