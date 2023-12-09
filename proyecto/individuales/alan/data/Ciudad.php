<?php
include_once("connection.php");
class Citys{
    private $city_id;
    private $ciudad;
    private $country_id;


    

    public function setCiudad($ciudad){
        $this->ciudad = $ciudad;
    }

    
    public function setCountry($country_id){
        $this->country_id = $country_id;
    }


    public function setCitys(){
        $query =
        "insert into city(city, country_id) 
        values('$this->ciudad', '$this->country_id')";
        echo $query;
        $con1 = connection::getInstance();
        $conectado = $con1->connect();
        $newid = -1;
        if($conectado == true){
            $newid = $con1->insert($query);
            //echo "nuevo id ". $newid;
        }
        else{
            //echo "problemas con la conexion";
            $newid = -1;
        }
        return $newid;
    }
}