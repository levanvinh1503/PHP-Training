<?php
require_once __DIR__."/../classSession.php";

if (isset($_POST["idSessionDB2"])) {
    /**
     * SelectValueDB Select a value as a parameter in the database
     * 
     * @param string $idSelect
     *
     * @return void 
     */
    function SelectValueDB($idSelect)
    {
        $idSec = $idSelect;
        $createSession = new classSession();
        $createSession->read($idSec);
        if (!empty($createSession)) {
            echo $createSession->read($idSec);
        } else {
            echo "Not Found !";
        }
    }

    //called function
    SelectValueDB($_POST["idSessionDB2"]);
}else {
    echo "Error !";
}
