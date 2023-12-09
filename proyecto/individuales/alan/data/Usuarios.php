<?php 
include_once("Connection.php");
class Usuarios{
    private $userid;
    private $email;
    private $passw;

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassw($passw){
        $this->passw = $passw;
    }

    public function getUsuarios(){
        $query = 
        "select * from usuarios where email ='$this->email' and passw ='$this->passw'";
        echo $query;
        $con1 = Connection::getInstance();
        $conectado = $con1->connect();
        if($conectado == true){
            $dataset = $con1->query($query);
            //echo "nuevo userid ". $newuserid;
        }
        else{
            //echo "problemas con la conexion";
            $dataset = "error";
        }
        return $dataset;
    }
}
?>