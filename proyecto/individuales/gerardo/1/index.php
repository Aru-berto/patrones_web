<?php
require_once 'PaymentModel.php';

class Controller {
    private $paymentModel;

    public function __construct() {
        $this->paymentModel = new PaymentModel();
    }

    public function invoke() {
        $payments = $this->paymentModel->getAllPayments();
        include 'view.php';
    }
}

$controller = new Controller();
$controller->invoke();
?>