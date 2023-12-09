<?php
include_once('conection.php');
class FilmAct{
    public function getFAL(){
        //consulta para seleccionar datos de tabla
        $query =
        "SELECT first_name, last_name, title
        FROM film_actor
        INNER JOIN actor 
        ON film_actor.actor_id= actor.actor_id
        INNER JOIN film 
        ON film_actor.film_id= film.film_id";
    $con1 = Connection::getInstance();
    $conectado = $con1->connect();
    if ($conectado){  
        $dataset = $con1->query($query);
    }
    else{
        $dataset = "error";
    }
    return $dataset;
    
    }


    public function getDate(){
        //consulta para seleccionar datos de tabla
        $query =
        "SELECT last_update FROM film_actor";
    $con1 = Connection::getInstance();
    $conectado = $con1->connect();
    if ($conectado){  
        $dataset = $con1->query($query);
    }
    else{
        $dataset = "error";
    }
    return $dataset;
    
    }


}