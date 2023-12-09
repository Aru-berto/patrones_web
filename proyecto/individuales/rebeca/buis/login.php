<?php

include_once("../data/Usuarios.php");
$user = new Usuarios();
$user->setEmail($_POST['correo']);
$user->setPassw($_POST['passw']);
$dataset = $user->getUsuarios();


//iniciar las variables de sesion si los datos son correctos
if($dataset != "Error"){
    $i = mysqli_num_rows($dataset);//contador para ver cuantos registros regreso
    if ($i == 1){ //coincide password y correo
        session_start();
        $row = mysqli_fetch_assoc($dataset);
        $_SESSION['nick'] = $row['nickname'];
        $_SESSION['correo'] = $row['email'];
        $_SESSION['id'] = $row['userid'];
        header("location:../index.php");
    }
    
    else{
        //echo "Problemas con datos";
        header("location:../view/formLogin.html");
    }
    
}
else{
    
    header("location:../view/formLogin.html");

}




?>

