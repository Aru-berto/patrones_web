<?php 
include_once("Connection.php");
class Stores{
    public function getStore(){
        $query = "select * from store";
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