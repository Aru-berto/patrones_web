<?php 
include_once("Connection.php");
class Citys{
    public function getCity(){
        $query = "SELECT city_id, city, country, city.last_update last_update FROM city INNER JOIN country ON city.country_id = country.country_id;";
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

    public function getCity10(){
        $query = "SELECT city_id, city, country, city.last_update last_update FROM city INNER JOIN country ON city.country_id = country.country_id LIMIT 10;";
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