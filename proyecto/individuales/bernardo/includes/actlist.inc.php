<?php
include_once('conection.php');
class Lista
{
    public function getList()
    {
        //consulta para seleccionar datos de tabla
        $query =
            "SELECT actor_id, first_name, last_name, last_update FROM actor";
        $con1 = Connection::getInstance();
        $conectado = $con1->connect();

        if ($conectado) {  //$conectado ==true
            $dataset = $con1->query($query);
            //echo "nuevo userid ". $newuserid;
        } else {
            //echo "problemas con la conexion";
            $dataset = "error";
        }
        return $dataset;

    }

}

class Film
{
    public function getFilm()
    {
        //consulta para seleccionar datos de tabla
        $query =
            "SELECT film_id, title FROM film";
        $con1 = Connection::getInstance();
        $conectado = $con1->connect();

        if ($conectado) {  //$conectado ==true
            $dataset = $con1->query($query);
            //echo "nuevo userid ". $newuserid;
        } else {
            //echo "problemas con la conexion";
            $dataset = "error";
        }
        return $dataset;

    }

}


?>