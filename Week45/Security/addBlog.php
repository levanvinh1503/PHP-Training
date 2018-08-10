<?php
require_once __DIR__."/ClassSecurity.php";

if (isset($_POST['title-blog']) && isset($_POST['content-blog'])) {
	$titleBlogInput = $_POST['title-blog'];
	$contentBlogInput = $_POST['content-blog'];
	if (!empty($_POST['title-blog']) && !empty($_POST['content-blog'])) {
		/*Initialize the object that is connected to the database*/
		$objectAddBlog = new ClassSecurity();
		$connectDb = $objectAddBlog->ConnectDb();
		$sqlQuery = "INSERT INTO blogs VALUES ('','".$titleBlogInput."','".$contentBlogInput."')";
		$resultData = $objectAddBlog->InsertData($sqlQuery);
		if ($resultData) {
			echo "Insert Success !";
		} else {
			echo "Insert data fail !";
		}
	} else {
		echo "Please insert the value !";
	}
} else {
	echo "Error !";
}