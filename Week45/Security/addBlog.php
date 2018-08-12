<?php
require_once __DIR__."/ClassSecurity.php";

if (isset($_POST['title-blog']) && isset($_POST['content-blog'])) {
    /**
     * AddBlog Insert data into table blogs
     * 
     * @param string $titleBlog
     * @param string $contentBlog
     * 
     * @return void
     */
    function AddBlog($titleBlog, $contentBlog)
    {
        /*Convert special characters to HTML entities*/
        $titleBlogInput = htmlspecialchars($titleBlog);
        $contentBlogInput = htmlspecialchars($contentBlog);
        /*Sensitive string array*/
        $arrayStringSensitive = array("select", "insert", "update", "delete", "union", "SELECT", "UPDATE", "INSERT", "DELETE", "UNION", "=", "'", "-");
        /*Delete the sensitive characters in the string*/
        $replaceStringTitleBlog = str_replace($arrayStringSensitive, "", $titleBlogInput);
        $replaceStringContentBlog = str_replace($arrayStringSensitive, "", $contentBlogInput);

        if (!empty($_POST['title-blog']) && !empty($_POST['content-blog'])) {
            /*Initialize the object that is connected to the database*/
            $objectAddBlog = new ClassSecurity();
            $connectDb = $objectAddBlog->ConnectDb();
            $sqlQuery = "INSERT INTO blogs VALUES ('','".$replaceStringTitleBlog."','".$replaceStringContentBlog."')";
            $resultData = $objectAddBlog->InsertData($sqlQuery);
            if ($resultData) {
                echo "Insert Success !";
            } else {
                echo "Insert data fail !";
            }
        } else {
            echo "Please insert the value !";
        }
    }

    AddBlog($_POST['title-blog'], $_POST['content-blog']);
} else {
    echo "Error !";
}