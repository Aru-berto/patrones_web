<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title>Document</title>
   <center> <h1>Datos de ciudad</h1> </center> 
    </head>
<body>
    <form action="../buis/registroC.php" method="post">
        <ul>
            <Center>Datos</Center>
       <li> <label>Ciudad</label>
        <input type="text" name="txtcity" required pattern="{A-Z a-z}{2,20}">
    </li>



                <label for="">Country</label>
                    <select class="form-control" id="exampleFormControlCategorias" name="countryid">
                        <?php
                            include_once('../data/ShowCountry.php');
                            $objeto2 = new Country();
                            $consulta2 = $objeto2->getCountry();
                            if($consulta2){
                
                                while($row2 = mysqli_fetch_assoc($consulta2)){ 
                            ?>
                                <option value="<?php echo $row2['country_id'];?>"><?php echo $row2['country'];?></option>
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