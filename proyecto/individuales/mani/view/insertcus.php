<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylecus.css">
    <title>Document</title>
</head>
<body>
    <form action="../buis/registro.php" method="post">
        <ul>
            <fieldset>
                <legend>Customer</legend>
                <li>
                    <label for="">Numero de tienda</label>
                    <select class="form-control" id="exampleFormControlCategorias" name="storeid">
                    <?php
                        include_once('../data/ShowStore.php');
                        $objeto = new Stores();
                        $consulta = $objeto->getStore();
                        if($consulta){
            
                            while($row = mysqli_fetch_assoc($consulta)){ 
                        ?>
                            <option value="<?php echo $row['store_id'];?>"><?php echo $row['store_id'];?></option>
                        <?php
                            }
                        }
                        else{
                            echo "algo ha fallado";
                        }
                    ?>
                    </select>
                </li>
                <li>
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" required>
                </li>
                <li>
                    <label for="">Apellido</label>
                    <input type="text" name="apellido" required>
                </li>
                <li>
                    <label for="">Email</label>
                    <input type="email" name="email" required>
                </li>
                <li>
                    <label for="">Direccion</label>
                    <select class="form-control" id="exampleFormControlCategorias" name="addressid">
                        <?php
                            include_once('../data/ShowAddress.php');
                            $objeto2 = new Address();
                            $consulta2 = $objeto2->getAddress();
                            if($consulta2){
                
                                while($row2 = mysqli_fetch_assoc($consulta2)){ 
                            ?>
                                <option value="<?php echo $row2['address_id'];?>"><?php echo $row2['address'];?></option>
                            <?php
                                }
                            }
                            else{
                                echo "algo ha fallado";
                            }
                        ?>
                    </select>
                </li>
                <li>
                    <label for="">Activo</label>
                    <input type="number" value="1" name="active" readonly>
                </li>
            </fieldset>
                <li>
                    <center><input type="submit" class="btnsubmit" value="Enviar"></center>
                </li>
        </ul>
    </form>
</body>
</html>