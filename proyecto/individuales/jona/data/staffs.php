<?php
include_once('conexion.php');
class staff{
    private $userid;
    private $fname;
    private $lname;
    private $address_id;//foreign key
    private $picture; 
    private $email;
    private $store_id;//foreign key
    private $active;
    private $username;
    private $password;

    public function setfname($fname){
        $this->fname = $fname;
    }
    public function setlname($lname){
        $this->lname = $lname;
    }
    public function setaddress_id($address_id){
        $this->address_id = $address_id;
    }
    public function setpicture($picture){
        $this->picture = $picture;
    }
    public function setemail($email){
        $this->email = $email;
    }
    public function setstoreid($store_id){
        $this->store_id = $store_id;
    }
    public function setactive($active){
        $this->active = $active;
    }
    public function setusername($username){
        $this->username = $username;
    }
    public function setpassword($password){
        $this->password = $password;
    }

    public function setstaff(){
        $query = 
        "INSERT INTO  staff(first_name,last_name,address_id,picture,email,store_id,active,username,password) 
        values('$this->fname','$this->lname','$this->address_id','$this->picture','$this->email','$this->store_id','$this->active','$this->username','$this->password')";
        // echo $query;
        $con1 = Connection::getInstance();
        $conectado= $con1->connect();
        $newuserid= -1;
        if($conectado){
            $newuserid =$con1->insert($query);
          //  echo "Nuevo userid ". $newuserid;
        }
        else{
          //  echo "Problemas con la conexion";

        }
        return $newuserid;
    }

    public function getstaff(){
        $query = 
        "SELECT *  FROM staff where
             email= '$this->email' AND password = '$this->password'";
        echo $query;
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