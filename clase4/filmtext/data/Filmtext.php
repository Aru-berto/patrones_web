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

    public function getFilmTextByTitle(){
        $query = "SELECT film_id num, title pelicula, description sinopsis FROM film_text ORDER BY title";

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

    public function getFilmTextByTitleZA(){
        $query = "SELECT film_id num, title pelicula, description sinopsis FROM film_text ORDER BY title DESC";

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

    public function getFilmTextByDesc(){
        $query = "SELECT film_id num, title pelicula, description sinopsis FROM film_text ORDER BY description";

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

    public function getFilmTextByDescZA(){
        $query = "SELECT film_id num, title pelicula, description sinopsis FROM film_text ORDER BY description DESC";

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