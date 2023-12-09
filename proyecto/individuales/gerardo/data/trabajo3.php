<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Alquileres de Películas</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Alquileres de Películas</h1>

    <table>
        <tr>
            <th>Rental ID</th>
            <th>Rental Date</th>
            <th>Inventory ID</th>
            <th>Customer ID</th>
            <th>Return Date</th>
        </tr>

        <?php
        // Realizar la conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sakila";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Consulta SQL para obtener datos de la tabla "rental"
        $sql = "SELECT * FROM rental LIMIT 10"; // Limitamos a 10 resultados para este ejemplo
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar los datos en una tabla HTML
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["rental_id"] . "</td>";
                echo "<td>" . $row["rental_date"] . "</td>";
                echo "<td>" . $row["inventory_id"] . "</td>";
                echo "<td>" . $row["customer_id"] . "</td>";
                echo "<td>" . $row["return_date"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>0 resultados encontrados</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>

</html>