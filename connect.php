<?php
class connect
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "globiz_db";
    // database connectivity
    public function connect()
    {
        $con = mysqli_connect($this->host,$this->user,$this->password,$this->dbname);
        return $con;
    }
}
    ?>