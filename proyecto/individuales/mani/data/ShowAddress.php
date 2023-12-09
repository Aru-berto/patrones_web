<?php 
include_once("Connection.php");
class Address{
    public function getAddress(){
        $query = "select * from address";
        $con1 = Connection::getInstance();
        $conectado = $con1->connect();
        if($conectado == true){
            $dataset = $con1->query($query);
        }
        else{
            //echo "problemas con la conexion";
            $dataset = "error";
        }
        return $dataset;
    }
}
?>