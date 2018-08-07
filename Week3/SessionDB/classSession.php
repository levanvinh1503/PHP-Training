<?php
/**
 * classSession Overide functions set() and get() of session for saving value to database
 * 
 * @package classSession 
 * @access public
 */
class classSession
{
    /**
     * statusDB object
     *
     * @var string
     */
    private $statusDB;

    /**
     * __construct
     */
    public function __construct()
    {
        // set our custom session functions.
        session_set_save_handler(
            array($this, 'open'), 
            array($this, 'close'), 
            array($this, 'read'), 
            array($this, 'write'), 
            array($this, 'destroy'), 
            array($this, 'gc')
        );

        //start session
        session_start();
    }

    /**
     * open Connect database
     * @return bool true
     */
    public function open()
    {
        $this->statusDB = new PDO('mysql:host=localhost;dbname=tableSesstion', 'root', '');
        return true;
    }

    /**
     * close Disconnect database
     * 
     * @return bool true
     */
    public function close()
    {
        $this->statusDB = null;
        return true;
    }

    /**
     * read Select session value in database
     * 
     * @param  string
     * 
     * @return string
     */
    public function read($idSession)
    {
        $sql = "SELECT IdValues FROM tableSesstion WHERE ID = ?";
        $query = $this->statusDB->prepare($sql);
        $query->bindValue(1, $idSession, PDO::PARAM_INT);
        if ($query->execute()) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $session_data = $result['IdValues'];
            // Return the data
            if (is_null($session_data)) {
                $session_data = '';
            }
        }
        return $session_data;
    }

    /**
     * write Insert session value in database
     * 
     * @param  string $idSession
     * @param  string $valueSesstion
     * 
     * @return bool true or false
     */
    public function write($idSession, $valueSesstion)
    {
        if ($this->statusDB != null) {
            $sql = "INSERT INTO tableSesstion VALUES (?, ?)";
            $query = $this->statusDB->prepare($sql);
            $query->bindValue(1, $idSession, PDO::PARAM_INT);
            $query->bindValue(2, $valueSesstion, PDO::PARAM_INT);
            if ($query->execute()) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }

    /**
     * destroy Delete session value in database
     * @param  string $idSession
     * 
     * @return bool true or false
     */
    public function destroy($idSession)
    {
        $sql = "DELETE FROM tableSesstion WHERE ID = ?";
        $query = $this->statusDB->prepare($sql);
        $query = $this->statusDB->bindValue(1, $idSession, PDO::PARAM_INT);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * gc
     * 
     * @return bool true
     */
    public function gc()
    {  
        return true;  
    }  
}