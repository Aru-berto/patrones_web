<?php 
include_once("Connection.php");
class Customers{
    private $customer_id;
    private $store_id;
    private $first_name;
    private $last_name;
    private $email;
    private $address_id;
    private $active;

    public function setStore_id($store_id){
        $this->store_id = $store_id;
    }

    public function setFirst_name($first_name){
        $this->first_name = $first_name;
    }

    public function setLast_name($last_name){
        $this->last_name = $last_name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setAddress_id($address_id){
        $this->address_id = $address_id;
    }

    public function setActive($active){
        $this->active = $active;
    }

    public function setCustomers(){
        $query = 
        "insert into customer(store_id, first_name, last_name, email, address_id, active) values('$this->store_id','$this->first_name','$this->last_name','$this->email','$this->address_id','$this->active')";
        //echo $query;
        $con1 = Connection::getInstance();
        $conectado = $con1->connect();
        $newid = -1;
        if($conectado == true){
            $newid = $con1->insert($query);
            //echo "nuevo customer_id ". $newcustomer_id;
        }
        else{
            //echo "problemas con la conexion";
            $newid = -1;
        }
        return $newid;
    }
}
?>