<!DOCTYPE html>
<html>
<head>
    <title>List Product</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php
    require_once __DIR__."/ClassSecurity.php";
    session_start();
    if (isset($_SESSION['login'])) {
    ?>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['login']; ?> 
            <button class="btn btn-default btn-logout">Log Out</button>
        </h2>
        <h2>List Blogs 
            <button class="btn btn-default" data-toggle="modal" data-target="#add-blog-modal">Add Blog</button>
        </h2>
        <div class="reload-table">
            <table class="table table-bordered" id="table-list-blog">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
                <?php
                /*Initialize the object that is connected to the database*/
                $objectListBlog = new ClassSecurity();
                $connectDb = $objectListBlog->ConnectDb();
                $sqlQuery = "SELECT * FROM blogs";
                $resultData = $objectListBlog->SelectData($sqlQuery);
                foreach ($resultData as $keyResultData => $valueResultData) {
                    echo "<tr>";
                    foreach ($valueResultData as $keyArray => $valueArray) {
                ?>
                    <td><?php echo htmlspecialchars($valueArray); ?></td>
                <?php
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
    <?php
    } else {
        echo "<h2>Please login</h2>";
    }
    ?>
    <div id="add-blog-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Add Blog</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="form-add-blog" method="POST">
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" type="text" name="title-blog">
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control" name="content-blog"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-default" type="submit" name="submit-add-blog" value="Add Blog">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $(function() { 
            $("#form-add-blog").submit(function (eventSubmit) {
                eventSubmit.preventDefault();
                $.ajax({
                    url: "addBlog.php",
                    data: $("#form-add-blog").serialize(),
                    type: "POST",
                    success: function (dataResult) {
                        alert(dataResult);
                        if (dataResult == "Insert Success !") {
                            $("#add-blog-modal .close").click();
                            var locationHref = window.location.href;
                            $(".reload-table").load(""+locationHref+" #table-list-blog");
                        }
                    }
                });
            });
            $(".btn-logout").click(function (eventSubmit) {
                eventSubmit.preventDefault();
                $.ajax({
                    url: "logout.php",
                    type: "GET",
                    success: function (dataResult) {
                        alert(dataResult);
                        window.location.href="index.php";
                    }
                });
            });
        });
    </script>
</body>
</html>