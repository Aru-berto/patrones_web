<?php

class Vehiculo{
    public $ruedas;
    public static function create($type, $ruedas){
        switch($type){
            case 'car':
                return new Carro($ruedas);
            case 'motorcycle':
                return new Motocicleta($ruedas);
            default:
                return new Exception("No existe");
        }
    }
    public function getType(){
        return get_class($this);
    }
}

class Carro extends Vehiculo{
    public function __construct($ruedas){
        $this->ruedas = $ruedas;
    }
}

class Motocicleta extends Vehiculo{
    public function __construct($ruedas){
        $this->ruedas = $ruedas;
    }
}
?>