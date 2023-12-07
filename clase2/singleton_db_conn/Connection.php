<?php
class Connection{
    private static $instance = NULL;
    private $con = NULL;

    public function __construct(){
        $this->con = new mysqli("localhost", "root", "", "sakila");
    }

    public static function getInstance(){
        if(is_null(self::$instance)){
            return self::$instance = new Connection();
        }
        return self::$instance;
    }

    public function getCon(){
        return $this->con;
    }
    // pendiente la base de datos


    public function query($sql){
        $consulta = mysqli_query($this->con, $sql);
        return $consulta;
    }
}


?>