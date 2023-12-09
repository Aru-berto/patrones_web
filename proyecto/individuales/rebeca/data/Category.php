<?php
include_once("Connection.php");
class Categ{


public function getCatego10(){
    $query=
    "select category_id, name from category limit 10" ;

    $con1 = Connection::getInstance();
    $conectado = $con1->__connect();
    $newid = 0;

   if($conectado){
    $dataset = $con1->query($query);
   }

    else{
        $dataset = "Error";
    }
    return $dataset;
    
}
public function getCategorAll(){
    $query=
    "select category_id, name from category" ;

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