<?php
require_once __DIR__."/ClassSecurity.php";

if (isset($_POST['username-login']) && isset($_POST['password-login'])) {
    /**
     * UserLogin Login with $userName, $password
     * 
     * @param string $userName
     * @param string $passWord
     * 
     * @return void
     */
    function UserLogin($userName, $passWord)
    {
        $usernameInput = $userName;
        $passwordInput = md5($passWord);
        /*Convert special characters to HTML entities*/
        $inputHtml = htmlspecialchars($usernameInput);
        $arrayStringSensitive = array("select", "insert", "update", "delete", "union", "SELECT", "UPDATE", "INSERT", "DELETE", "UNION", "=", "'", "-");
        /*Delete the sensitive characters in the string*/
        $replaceStringUser = str_replace($arrayStringSensitive, "", $inputHtml);
        /*Initialize the object that is connected to the database*/
        $objectLogin = new ClassSecurity();
        $connectDb = $objectLogin->ConnectDb();
        $sqlQuery = "SELECT * FROM users WHERE username = '".$replaceStringUser."' AND password = '".$passwordInput."'";
        $resultData = $objectLogin->SelectData($sqlQuery);

        if (count($resultData) == 1) {
            session_start();
            $_SESSION['login'] = $usernameInput;
            echo "true";
        } else {
            echo "Incorrect username or password !";
        }
    }

    UserLogin($_POST['username-login'], $_POST['password-login']);
} else {
    echo "Error !";
}