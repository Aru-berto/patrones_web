<?php
include_once("Connection.php");
class Count{


    public function getCount10(){
        $query=
        "select country_id, country from country limit 10" ;
    
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


public function getCountAll(){
    $query=
    "select country_id, country from country" ;

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