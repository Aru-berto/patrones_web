<?php
class Connection{
    private static $instance = NULL;
    private $con = NULL;

    public function __construct(){
        $this->con = new mysqli("localhost", 'root', '', 'sakila');
    }

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance=new Connection();
        }
        return self::$instance;
    }

    public function getCon(){
        return $this->con;
    }

    public function connect(){
        $this->con = new mysqli("localhost", 'root', '', 'sakila');
        if($this->con){
            return true;
        }
        else{
            return false;
        }

    }

    public function insert($sql){
        if(mysqli_query($this->con,$sql)>0){
            $newid= $this->con->insert_id;
        }
        else{
            $newid =0;
        }
        return $newid;
    }

    public function query($sql){
        $consulta = mysqli_query($this->con,$sql);
        return $consulta;
    }
        
}
?>