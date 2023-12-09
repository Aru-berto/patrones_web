<?php 
include_once("Connection.php");
class Country{
    public function getCountry(){
        $query = "select * from country";
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