<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Direccion</h1>
     
    <?php 
    include_once('../data/ShowA.php');
    $objeto = new Adress();
    $consulta = $objeto->getAddress();
    
    if($consulta){
        
        while($row = mysqli_fetch_assoc($consulta)){
            foreach($row as $clave => $valor){
                
                echo $valor." - ";
            }
            echo "<br>";
            echo "</table>";
        }
    }
    else{
        echo "algo ha fallado";
    }
    ?>
           
</body>
</html>