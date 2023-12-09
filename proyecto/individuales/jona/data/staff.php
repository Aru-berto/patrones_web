<?php
include_once("conexion.php");
    class staff{

    
     public function getstaffs(){
        $query = 
        "SELECT   staff.first_name,staff.last_name,address.address as addresss,staff.picture,staff.email,staff.store_id,staff.active,staff.username
        FROM staff 
        INNER JOIN address ON staff.address_id = address.address_id; ";
        
        $con1 = Connection::getInstance();
        $conectado = $con1->connect();
        if($conectado== true){
            $dataset =$con1->query($query);
          //  echo "Nuevo userid ". $newuserid;
        }
        else{
            $dataset = " Error ";
        }
        return $dataset;
    }

 
}

?>