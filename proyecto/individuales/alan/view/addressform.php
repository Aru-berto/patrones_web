<?php
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
   <center> <h1>Datos de direccion</h1> </center> 
    </head>
<body>


    <form action="../buis/registroA.php" method="post">
        <ul>
            <Center>Datos</Center>
       <li> <label>Direccion</label>
        <input type="text" name="txtadress" required pattern="{A-Z a-z}{2,20}">
    </li>
    <li>    <label>Direccion 2</label>
        <input type="text" name="txtadress2" pattern="{A-Z a-z}{2,20}">
    </li>
    <li>    <label>Distrito</label>
        <input type="text" name="txtdistrict" required pattern="{A-Z a-z}{2,20}">
    </li>
      <li> <label>Codigo postal</label>
        <input type="number" name="txtcode" required pattern="{0-9}{2,20}">
    </li>
    <li> <label>Numero</label>
        <input type="number" name="txtphone" required pattern="{0-9}{7,20}">
    </li>



    <label for="">Ciudad</label>
                    <select class="form-control" id="exampleFormControlCategorias" name="ciudadid">
                        <?php
                            include_once('../data/ShowC.php');
                            $objeto2 = new Citys();
                            $consulta2 = $objeto2->getCity();
                            if($consulta2){
                
                                while($row2 = mysqli_fetch_assoc($consulta2)){ 
                            ?>
                                <option value="<?php echo $row2['city_id'];?>"><?php echo $row2['city'];?></option>
                            <?php
                                }
                            }
                            else{
                                echo "algo ha fallado";
                            }
                        ?>
                    </select>
                    
                </li>
                
                <input type="submit" class="btnsubmit">
    </ul>
</form>

</body>
</html>