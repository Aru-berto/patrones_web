<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <form action="../buis/registro.php" method="post">
        <ul>
    <fieldset>
        <legend>Staff</legend>
        <li>
        <label>Correo</label>
        <input type="email" name="txtemail" required>
        </li>
        <li>
        <label>Contraseña</label>
        <input type="password" name="txtpass"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
        </li>
        <li>
        <label>Usuario</label>
        <input type="text" name="txtusuario" required >
         </li>
         <li>
            <label>Nombre</label>
            <input type="text" name="txtnombre" required >
             </li>
             <li>
                <label>Apellido</label>
                <input type="text" name="txtapellido" required >
                 </li>
                 <li>
                    <?php
                      require("../insert/conexion.php");
                    $sentencia = $mbd-> prepare("SELECT * FROM address");
                    $sentencia->execute();
                    ?>
                    <label>Direccion</label>       
                      <select class="form-control" name="txtdireccion">
                     <?php while ($fila = $sentencia->fetch()) {
            
         ?>
        <option value="<?php echo $fila ["address_id"]; ?>"><?php echo $fila ["address"];} ?></option>

      </select>
  </div>
                     </li>
                     <li>
                        <label>Fotografia</label>
                     <input type="file" id="myFile" name="txtfoto">
                           
                        <li>
                        <?php
                     
                    $sentencia = $mbd-> prepare("SELECT * FROM store");
                    $sentencia->execute();
                    ?>
                            <label>Tienda</label>
                            <select class="form-control" name="sucursal">
                     <?php while ($fila = $sentencia->fetch()) {
            
         ?>
        <option value="<?php echo $fila ["store_id"]; ?>"><?php echo $fila ["address_id"];} ?></option>

      </select>
                             </li>
    <li  >
        <input class="btnsubmit" type="submit">
    </li>
</fieldset>
</ul>
    </form>
</body>
</html>