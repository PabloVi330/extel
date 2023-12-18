<?php
class DBConnection {
    private $host = "localhost";
    private $dbname = "redextel";
    private $username = "root";
    private $password = "";
    
    private static $instance = null;
    private $connection;
  
    private function __construct() {
        $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new DBConnection();
        }
        return self::$instance->connection;
    }
}
?>
