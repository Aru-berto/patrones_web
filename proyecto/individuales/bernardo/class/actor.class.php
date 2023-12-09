<?php
include_once('../includes/conection.php');
//class de actor
class Actor{

//variables
    private $id;
    private $nombre;
    private $apellido;
    private $fecha;

//sets para variables
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

//function query para agregar los datos
    public function setActor(){
        $query = 
        "insert into actor(first_name, last_name, last_update) 
        values('$this->nombre','$this->apellido','$this->fecha')";
        //echo $query;

    //validacion de conexion    
        $con1 = Connection::getInstance();
        $conectado = $con1->connect();
        $newid = 0;
        if ($conectado){  
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
?>