<?php

include_once("Connection.php");

class Filmtext{
    private $id;
    private $title;
    private $description;

    public function getFilmTextAll(){
        $query = "SELECT film_id num, title pelicula, description sinopsis FROM film_text";

        $con1 = Connection::getInstance();
        $conectado = $con1->connect();

        if($conectado){
            $dataset = $con1->query($query);
        }
        else{
            $dataset = "error";
        }
        return $dataset;
        
    }
}


?>