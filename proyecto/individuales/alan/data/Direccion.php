<?php
include_once("connection.php");
class Adress{

    
    private $address_id;
    private $direccion;
    private $direccion2;
    private $distrito;
    private $city_id;
    private $codigop;
    private $numero;

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function setDireccion2($direccion2){
        $this->direccion2 = $direccion2;
    }

    public function setDistrito($distrito){
        $this->distrito = $distrito;
    }
    public function setCity($city_id){
        $this->city_id = $city_id;
    }

    public function setCodigo($codigop){
        $this->codigop = $codigop;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function setAddress(){
        $query =
        "insert into address(address, address2, district, city_id, postal_code, phone) 
        values('$this->direccion','$this->direccion2','$this->distrito','$this->city_id','$this->codigop','$this->numero')";
        echo $query;
        $con1 = connection::getInstance();
        $conectado = $con1->connect();
        $newid = -1;
        if($conectado == true){
            $newid = $con1->insert($query);
           // echo "nuevo id ". $newid;
        }
        else{
           // echo "problemas con la conexion";
            $newid = -1;
        }
        return $newid;
    }
}
?>