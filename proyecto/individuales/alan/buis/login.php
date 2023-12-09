<?php 
include_once("../data/Usuarios.php");
$user = new Usuarios();
$user->setEmail($_POST['correo']);
$user->setPassw($_POST['passw']);
$dataset = $user->getUsuarios();

//iniciar las variables de sesion si los datos son correctos
if($dataset != "error"){


    $i = mysqli_num_rows($dataset); //contador cuantos registros regreso
    if($i == 1){ //conincide el password y el correo
        session_start();
        $row = mysqli_fetch_assoc($dataset);
        $_SESSION['nick'] = $row['nickname'];
        $_SESSION['correo'] = $row['email'];
        $_SESSION['id'] = $row['userid'];
        header("location: ../view/inicio.php");
        //pregunta de examen:porque el $row no esta en while: solamente estamos trayendo 1 con el i == 1
    }
    else{
        //echo "Problemas con datos del cliente";
        header("location: ../view/inicio.php");
    }
}
else{
    header("location: ../view/inicio.php");
}
    
?>