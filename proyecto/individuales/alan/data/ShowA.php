<?php 
include_once("Connection.php");
class Adress{
    public function getAddress(){
        $query = "SELECT address_id, address, address2, district, city,  postal_code, phone, address.last_update last_update FROM address INNER JOIN city ON city.city_id = address.city_id;";
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

    public function getAddress10(){
        $query = "SELECT address_id, address, address2, district, city,  postal_code, phone, address.last_update last_update FROM address INNER JOIN city ON city.city_id = address.city_id LIMIT 10;";
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