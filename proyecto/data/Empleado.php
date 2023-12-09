<?php

include_once("Connection.php");

class Empleado
{
    private $id;
    private $nombre;
    private $paterno;
    private $materno;
    private $fecha;

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setPaterno($paterno)
    {
        $this->paterno = $paterno;
    }

    public function setMaterno($materno)
    {
        $this->materno = $materno;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function setEmpleado()
    {
        $query = "insert into empleados (nombre, paterno, materno, fechanac) values ('$this->nombre', '$this->paterno', '$this->materno', '$this->fecha')";

        $con1 = Connection::getInstance();
        $conectado = $con1->connect();
        $newid = 0;

        if ($conectado) {
            $newid = $con1->insert($query);
        } else {
            $newid = -1;
        }
        return $newid;

    }

    public function showEmpleados()
    {
        $query = "SELECT * FROM empleados;";
        $con1 = Connection::getInstance();
        $conectado = $con1->connect();

        if ($conectado) {
            $dataset = $con1->query($query);
        } else {
            $dataset = "error";
        }
        return $dataset;
    }

    public function showEmpleados10()
    {
        $query = "SELECT * FROM empleados LIMIT 10;";
        $con1 = Connection::getInstance();
        $conectado = $con1->connect();

        if ($conectado) {
            $dataset = $con1->query($query);
        } else {
            $dataset = "error";
        }
        return $dataset;
    }
}


?>