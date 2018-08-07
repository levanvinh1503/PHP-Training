<?php
require_once __DIR__."/../classSession.php";
if (isset($_POST["idSessionDB1"]) && isset($_POST["valueSession"])) {
    /**
     * InsertValueDB Insert $idInsert and $valuesInsert to the database
     * 
     * @param string $idInsert
     * @param string $valueInsert
     *
     * @return void Create Session Success !
     */
    function InsertValueDB($idInsert, $valueInsert)
    {
        $idSec = $idInsert;
        $valueSec = $valueInsert;
        $createSession = new classSession();
        $createSession->write($idSec, $valueSec);
        echo "Create Session Success !";
    }
    
    //called function
    InsertValueDB($_POST["idSessionDB1"], $_POST["valueSession"]);
}else {
    echo "Error !";
}
