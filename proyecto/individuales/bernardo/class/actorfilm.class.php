<?php
include_once('../includes/conection.php');
//class de actor
class Actfil{

//variables
    private $actorid;
    private $filmid;
    private $fecha;

//sets para variables
    public function setAct($actorid){
        $this->actorid = $actorid;
    }
    public function setFilm($filmid){
        $this->filmid = $filmid;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

//function query para agregar los datos
    public function setActorF(){
        $query = 
        "insert into film_actor (actor_id, film_id, last_update) 
        values ('$this->actorid','$this->filmid','$this->fecha')";
        echo $query;

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