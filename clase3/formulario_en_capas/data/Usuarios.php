<?php

include_once("Connection.php");

class Usuarios{
    private $userid;
    private $email;
    private $passw;
    private $nickname;
    private $empid; //FK

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassw($passw){
        $this->passw = $passw;
    }

    public function setNickname($nickname){
        $this->nickname = $nickname;
    }

    public function setEmpid($empid){
        $this->empid = $empid;
    }

    public function setUsuarios(){
        $query = "insert into usuarios (email, passw, nickname, empid) values ('$this->email', '$this->passw', '$this->nickname', '$this->empid')";

        $con1 = Connection::getInstance();
        $conectado = $con1->connect();
        $newid = 0;

        if($conectado){
            $newid = $con1->insert($query);
        }
        else{
            $newid = -1;
        }
        return $newid;
        
    }
}


?>