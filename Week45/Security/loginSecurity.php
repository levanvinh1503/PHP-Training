<?php
require_once __DIR__."/../Transaction/ClassTransaction.php";

if (isset($_POST['username-login']) && isset($_POST['password-login'])) {
	function UserLogin($userName, $passwordInput)
	{
		$usernameInput = $userName;
		$passwordInput = md5($passwordInput);
		/*Declare variables to connect to the database*/
		$hostName = "localhost";
		$usernamDb = "root";
		$passwordDb = "";
		$nameDb = "db_demoex";
		/*Initialize the object that is connected to the database*/
		$objectLogin = new ClassTransaction($hostName, $usernamDb, $passwordDb, $nameDb);
		$connectDb = $objectLogin->ConnectDb();
		$sqlQuery = "SELECT * FROM users WHERE username = '".$usernameInput."' AND password = '".$passwordInput."'";
		$resultData = $objectLogin->SelectData($sqlQuery);

		if (count($resultData) == 1) {
			session_start();
			$_SESSION['login'] = $usernameInput;
			echo "true";
		} else {
			echo "Incorrect username or password !";
		}
	}
} else {
	echo "Error !";
}