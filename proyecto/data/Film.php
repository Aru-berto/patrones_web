<?php
include_once("Connection.php");
class Film{
    public function getFilm10(){
        $query = "SELECT title, release_year FROM film LIMIT 10;";
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
    public function getFilmAll(){
        $query = "SELECT title, release_year, description, length FROM film;";
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