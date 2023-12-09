<?php
require_once 'db_config.php';

class PaymentModel {
    public function getAllPayments() {
        $conn = connectDB();

        $sql = "SELECT * FROM payment";
        $result = $conn->query($sql);
        $payments = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $payments[] = $row;
            }
        }

        $conn->close();
        return $payments;
    }
}
?>