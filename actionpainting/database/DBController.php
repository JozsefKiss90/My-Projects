<?php
class DBController
{
    // Database Connection Properties

    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        include('config/config.php');
        $this->con = @mysqli_connect($host, $user, $password, $database);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
        
    }


    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}
