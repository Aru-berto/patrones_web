<?php
include_once("Connection.php");
class Customers
{
    public function getCustomer()
    {
        $query = "SELECT customer_id, store_id, first_name, last_name, email, address, IF(active=1, 'Activo', 'Inactivo'), create_date, customer.last_update FROM customer INNER JOIN address ON customer.address_id = address.address_id";
        $con1 = Connection::getInstance();
        $conectado = $con1->connect();
        if ($conectado == true) {
            $dataset = $con1->query($query);
        } else {
            //echo "problemas con la conexion";
            $dataset = "error";
        }
        return $dataset;
    }
    public function getCustomer10()
    {
        $query = "SELECT customer_id, store_id, first_name, last_name, email, address, IF(active=1, 'Activo', 'Inactivo'), create_date, customer.last_update FROM customer INNER JOIN address ON customer.address_id = address.address_id LIMIT 10";
        $con1 = Connection::getInstance();
        $conectado = $con1->connect();
        if ($conectado == true) {
            $dataset = $con1->query($query);
        } else {
            //echo "problemas con la conexion";
            $dataset = "error";
        }
        return $dataset;
    }
}
?>