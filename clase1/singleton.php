<?php
class Connection{
    private static $instance = NULL;

    private $con = NULL;

    public function __construct(){
        $this->con = "creada";
    }

    public function __clone(){}

    public static function getInstance(){
        if(is_null(self::$instance)){
            return self::$instance = new Connection();
        }
        return self::$instance;
    }

    public function getCon(){
        return $this->con;
    }
    // pendiente la base de datos
    
    public function hola(){
        echo 'Singleton';
    }
}

//main
echo "<br>";
echo memory_get_usage();
echo "<br><br>";

$objeto1 = Connection::getInstance();
$objeto1->getCon();

echo "<br>";
echo memory_get_usage();
echo "<br><br>";

$objeto2 = Connection::getInstance();
$objeto2->getCon();

echo "<br>";
echo memory_get_usage();
echo "<br><br>";

if ($objeto1 == $objeto2){
    echo "Dos variables, misma instancia";
}
else{
    echo "Son dos intancias";
}

?>