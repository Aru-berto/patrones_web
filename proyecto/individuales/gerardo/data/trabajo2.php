<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario de Alquiler</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Inventario de Alquiler</h2>

<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakila";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Consulta SQL para obtener el inventario con información de alquiler
$sql = "SELECT i.inventory_id, f.title,
               CASE WHEN r.rental_id IS NOT NULL THEN 'Rentada' ELSE 'No Rentada' END as is_rented
        FROM inventory i
        JOIN film f ON i.film_id = f.film_id
        LEFT JOIN rental r ON i.inventory_id = r.inventory_id
        ORDER BY i.inventory_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID de Inventario</th>
                <th>Título de la Película</th>
                <th>Estado de Alquiler</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["inventory_id"] . "</td>
                <td>" . $row["title"] . "</td>
                <td>" . $row["is_rented"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar conexión
$conn->close();
?>

</body>
</html>
