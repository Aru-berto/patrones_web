<?php

class Premio
{
    public $bono;
    public $totalRen; // Monto de Rentas
    public static function create($totalRen)
    {
        if ($totalRen > 50) {
            return new Oro();
        } else if ($totalRen > 30) {
            return new Platino();
        } else if ($totalRen > 10) {
            return new Basico();
        } else {
            return new sinPremio();
        }
    }
    public function getType()
    {
        return get_class($this);
    }

}
// Fin Premio

class Basico extends Premio
{
    public function __construct()
    {
        $this->bono = 20;
    }
}

class Platino extends Premio
{
    public function __construct()
    {
        $this->bono = 70;
    }
}

class Oro extends Premio
{
    public function __construct()
    {
        $this->bono = 120;
    }
}

class sinPremio extends Premio
{
    public function __construct()
    {
        $this->bono = 0;
    }
}
?>