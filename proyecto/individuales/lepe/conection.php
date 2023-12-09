<?php
class Connection
{
    private static $instance = NULL;

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "sakila";

    private $conn = NULL;

    private function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            return self::$instance = new Connection();
        } else {
            return self::$instance;
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
?>

