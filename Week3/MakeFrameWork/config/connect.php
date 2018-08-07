<?php
/**
 * define variable connect with database
 */
$host = "mysql:localhost";
$dbname = "tableSesstion";
$dbuser = "root";
$dbpassword = "";

//connect database
$conn = new PDO("mysql:$host;dbname=$dbname", $dbuser, $dbpassword);
