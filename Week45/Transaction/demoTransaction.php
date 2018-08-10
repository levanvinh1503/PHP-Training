<?php
require_once "ClassTransaction.php";

/**
 * Demotransaction 
 * 
 * @return void
 */
function DemoTransaction()
{
    /*Declare variables to connect to the database*/
    $hostName = "localhost";
    $usernamDb = "root";
    $passwordDb = "";
    $nameDb = "db_demoex";

    /*Initialize the object that is connected to the database*/
    $objectTransaction = new ClassTransaction($hostName, $usernamDb, $passwordDb, $nameDb);
    /*The database connection method is called*/
    $connectDb = $objectTransaction->ConnectDb();

    /*Checking connection*/
    if (!empty($connectDb)) {
        /*The database insert method is called*/
        $insertDataFirst = $objectTransaction->InsertData("INSERT INTO users VALUES ('','levanvinh1','123456789')");

        if ($insertDataFirst) {
            /*The database insert method is called*/
            $insertDataSecond = $objectTransaction->InsertData("INSERT INTO users VALUES ('','levanvinh3','123456789')");

            if ($insertDataSecond) {
                mysqli_commit($connectDb);
            } else {
                /*Rollback*/
                mysqli_rollback($connectDb);
            }
        } else {
            /*Rollback*/
            mysqli_rollback($connectDb);
        }

        /*Close connection*/
        $closeConnect = $objectTransaction->DisconnectDb();
    } else {
        echo "Error connect data base";
    }
}
