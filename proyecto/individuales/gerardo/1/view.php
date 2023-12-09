<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Pagos</title>
</head>
<body>

<h2>Tabla de Pagos</h2>

<table border='1'>
    <tr>
        <th>Payment ID</th>
        <th>Customer ID</th>
        <th>Staff ID</th>
        <th>Rental ID</th>
        <th>Amount</th>
        <th>Payment Date</th>
    </tr>

    <?php
    foreach ($payments as $payment) {
        echo "<tr>";
        echo "<td>" . $payment["payment_id"] . "</td>";
        echo "<td>" . $payment["customer_id"] . "</td>";
        echo "<td>" . $payment["staff_id"] . "</td>";
        echo "<td>" . $payment["rental_id"] . "</td>";
        echo "<td>" . $payment["amount"] . "</td>";
        echo "<td>" . $payment["payment_date"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>