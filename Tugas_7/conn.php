<?php
class Database{
    private $dbserver = "localhost";
    private $dbid = "root";
    private $dbpass = "";
    private $dbname = "uts_bismillah";
    public $conn = "";

    function __construct(){
        $this->conn = new mysqli($this->dbserver, $this->dbid, $this->dbpass, $this->dbname);
    }
}
?>