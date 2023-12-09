<?php

include_once("Connection.php");

class Usuarios
{
    private $userid;
    private $email;
    private $passw;
    private $nickname;
    private $empid; //FK
    private $lvl;

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassw($passw)
    {
        $this->passw = $passw;
    }

    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    public function setEmpid($empid)
    {
        $this->empid = $empid;
    }

    public function setLvl($lvl)
    {
        $this->lvl = $lvl;
    }

    public function setUsuarios()
    {
        $query = "insert into usuarios (email, passw, nickname, user_lvl, empid) values ('$this->email', '$this->passw', '$this->nickname', '$this->lvl', '$this->empid')";

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

    public function getUsuarios()
    {
        $query = "SELECT * FROM usuarios WHERE email = '$this->email' AND passw = '$this->passw' AND user_lvl = '$this->lvl';";
        $con1 = Connection::getInstance();
        $conectado = $con1->connect();

        if ($conectado) {
            $dataset = $con1->query($query);
        } else {
            $dataset = "error";
        }
        return $dataset;

    }

    public function showUsuarios()
    {
        $query = "SELECT userid, email, passw, nickname, IF(user_lvl=0, 'Usuario', 'Administrador') user_lvl, fechalt, nombre, paterno FROM usuarios INNER JOIN empleados ON usuarios.empid = empleados.empid;";
        $con1 = Connection::getInstance();
        $conectado = $con1->connect();

        if ($conectado) {
            $dataset = $con1->query($query);
        } else {
            $dataset = "error";
        }
        return $dataset;
    }

    public function showUsuarios10()
    {
        $query = "SELECT userid, email, passw, nickname, IF(user_lvl=0, 'Usuario', 'Administrador') user_lvl, fechalt, nombre, paterno FROM usuarios INNER JOIN empleados ON usuarios.empid = empleados.empid; LIMIT 10;";
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