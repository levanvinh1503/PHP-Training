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
        $createSession = new ClassSession();
        $createSession->GetSession($idSec);
        
        if (!empty($createSession->GetSession($idSec))) {
            echo $createSession->GetSession($idSec);
        } else {
            echo "Not Found !";
        }
    }

    //called function
    SelectValueDB($_POST["idSessionDB2"]);
} else {
    echo "Error !";
}
