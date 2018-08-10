<?php
/**
 * classSession Overide functions set() and get() of session for saving value to database
 * 
 * @package classSession 
 * @access public
 */
class ClassSession
{
    /**
     * @var string $statusDb
     */
    private $statusDb;

    /**
     * __construct
     */
    public function __construct()
    {
        // set our custom session functions.
        session_set_save_handler(
            array($this, 'ConnectDb'), 
            array($this, 'DisconnectDb'), 
            array($this, 'GetSession'), 
            array($this, 'SetSession'), 
            array($this, 'DestroySession'), 
            array($this, 'GcSession')
        );

        //start session
        session_start();
    }

    /**
     * ConnectDb Connect database
     * @return bool true
     */
    public function ConnectDb()
    {
        $this->statusDb = new PDO('mysql:host=localhost;dbname=tableSesstion', 'root', '');
        return true;
    }

    /**
     * DisconnectDb Disconnect database
     * 
     * @return bool true
     */
    public function DisconnectDb()
    {
        $this->statusDb = null;
        return true;
    }

    /**
     * GetSession Select session value in database
     * 
     * @param  string
     * 
     * @return string
     */
    public function GetSession($idSession)
    {
        $sqlQuery = "SELECT IdValues FROM tableSesstion WHERE ID = ?";
        $executeQuery = $this->statusDB->prepare($sqlQuery);
        $executeQuery->bindValue(1, $idSession, PDO::PARAM_INT);
        if ($executeQuery->execute()) {
            $resultData = $executeQuery->fetch(PDO::FETCH_ASSOC);
            $sessionData = $resultData['IdValues'];
            // Return the data
            if (is_null($sessionData)) {
                $sessionData = '';
            }
        }
        return $sessionData;
    }

    /**
     * SetSession Insert session value in database
     * 
     * @param  string $idSession
     * @param  string $valueSesstion
     * 
     * @return bool true or false
     */
    public function SetSession($idSession, $valueSesstion)
    {
        if ($this->statusDb != null) {
            $sqlQuery = "INSERT INTO tableSesstion VALUES (?, ?)";
            $executeQuery = $this->statusDb->prepare($sqlQuery);
            $executeQuery->bindValue(1, $idSession, PDO::PARAM_INT);
            $executeQuery->bindValue(2, $valueSesstion, PDO::PARAM_INT);
            if ($executeQuery->execute()) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }

    /**
     * DestroySession Delete session value in database
     * 
     * @param  string $idSession
     * 
     * @return bool true or false
     */
    public function DestroySession($idSession)
    {
        $sqlQuery = "DELETE FROM tableSesstion WHERE ID = ?";
        $executeQuery = $this->statusDb->prepare($sqlQuery);
        $executeQuery = $this->statusDb->bindValue(1, $idSession, PDO::PARAM_INT);
        if ($executeQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * GcSession
     * 
     * @return bool true
     */
    public function GcSession()
    {  
        return true;
    }  
}