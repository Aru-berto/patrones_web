<?php
include_once("Connection.php");
class Film{
public function getFilm10(){
    $query=
    "select title, release_year from film limit 10" ;

    $con1 = Connection::getInstance();
    $conectado = $con1->__connect();
    $newid = 0;

    if($conectado){
        $dataset = $con1->query($query);
    }
    else{
        $dataset = "Error";
    }
    return $dataset;
    
}

public function getFilmAll(){
    $query=
    "select title, release_year, description, length from film" ;

    $con1 = Connection::getInstance();
    $conectado = $con1->__connect();
   if($conectado){
    $dataset = $con1->query($query);
   }

    else{
        $dataset = "Error";
    }
    return $dataset;
    
}

}

?>