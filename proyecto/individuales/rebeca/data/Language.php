<?php
include_once("Connection.php");
class Idiom{

    public function getIdiom3(){
        $query=
        "select language_id, name from language limit 3" ;
    
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

public function getIdiomAll(){
    $query=
    "select language_id, name from language" ;

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