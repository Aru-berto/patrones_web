<?php
include("Connection.php");


echo "Memoria inicial: ";
echo memory_get_usage();
echo "<br><br>";


$con1 = Connection::getInstance();
$con1->getCon();

echo "Memoria después de la primera conexión: ";
echo memory_get_usage();
echo "<br><br>";


$consulta = $con1->query("SELECT * FROM actor");
if($consulta){
    // echo "Sí salió la consulta";
    while($row = mysqli_fetch_assoc($consulta)){
        echo $row['actor_id'] . "- ";
        echo $row['first_name'] . " - ";
        echo $row['last_name'] . " / ";
        echo $row['last_update'] . "<br>";
        echo "<br>";
    }
}
else{
    echo "Algo ha fallado";
}

// --------------------------------------------------------------------------------------------------------

$con2 = Connection::getInstance();
$con2->getCon();


echo "Memoria después de la segunda conexión: ";
echo memory_get_usage();
echo "<br><br>";


$consulta = $con2->query("SELECT * FROM city");
if($consulta){
    // echo "Sí salió la consulta";
    while($row = mysqli_fetch_assoc($consulta)){
        echo $row['city_id'] . "- ";
        echo $row['city'] . " - ";
        echo $row['country_id'] . " - ";
        echo $row['last_update'] . "<br>";
        echo "<br>";
    }
}
else{
    echo "Algo ha fallado";
}

/*
if ($objeto1 == $objeto2){
    echo "Dos variables, misma instancia";
}
else{
    echo "Son dos intancias";
}
*/





?>