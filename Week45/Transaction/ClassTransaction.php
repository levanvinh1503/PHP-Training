<?php
/**
 * ClassTransaction Transaction example
 * 
 * @package ClassTransaction
 * @access public
 */
class ClassTransaction
{
    /**
     * @var string $connectionDb
     * @var string $hostName
     * @var string $usernameDb
     * @var string $passwordDb
     * @var strign $nameDb
     */
    public $connectionDb;
    public $hostName;
    public $usernameDb;
    public $passwordDb;
    public $nameDb;
    
    /**
     * _construct
     */
    public function __construct($hostNameInput, $usernameDbInput, $passwordDbInput, $nameDbInput)
    {
        $this->hostName = $hostNameInput;
        $this->usernameDb = $usernameDbInput;
        $this->passwordDb = $passwordDbInput;
        $this->nameDb = $nameDbInput;
    }

    /**
     * ConnectDb Connect database
     * 
     * @return bool true or false
     */
    public function ConnectDb()
    {
        $connectMysql = mysqli_connect($this->hostName, $this->usernameDb, $this->passwordDb, $this->nameDb);
        $this->connectionDb = $connectMysql;
        return $connectMysql;
    }

    /**
     * DisconnectDb Disconnect database
     * 
     * @return bool true or false
     */
    public function DisconnectDb()
    {
        mysqli_close($this->connectionDb);
        return true;
    }

    /**
     * SelectData Select data from table
     * 
     * @param string $sqlQueryInput
     * 
     * @return array List the data from table
     */
    public function SelectData($sqlQueryInput)
    {
        mysqli_set_charset($this->connectionDb, 'UTF8');
        $executeQuery = mysqli_query($this->connectionDb, $sqlQueryInput);
        $resultData = array();
        if ($executeQuery) {
            while($executeData = mysqli_fetch_assoc($executeQuery))
            {
                $resultData[] = $executeData;
            }
        }
        return $resultData;
    }

    /**
     * InsertData Insert data into table 
     * 
     * @param string $sqlQueryInput
     * 
     * @return bool true or false
     */
    public function InsertData($sqlQueryInput)
    {
        mysqli_set_charset($this->connectionDb, 'UTF8');
        $executeQuery = mysqli_query($this->connectionDb, $sqlQueryInput);
        if ($executeQuery) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * DeleteData Delete data from table
     * 
     * @param string $sqlQueryInput
     * 
     * @return bool true or false
     */
    public function DeleteData($sqlQueryInput)
    {
        $executeQuery = mysqli_query($this->connectionDb, $sqlQueryInput);
        if ($executeQuery) {
            return true;
        } else {
            return false;
        }
    }
}