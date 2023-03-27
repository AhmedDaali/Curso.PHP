<?php
class Coche  extends Vehiculo {
    /** @var int $ruedas */
    public $ruedas;
    public string $marca;
    public string $color;
    public int $motor;
    


    public function __construct($marca_coche, $color_coche){//Constructor
        $this->marca = $marca_coche;
        $this->ruedas = 4;
        $this-> color = $color_coche;
        $this->motor = 1600;
    }

    function arrancar(){
        echo"Coche arrancando<br/>";
    }
    function girar(){
        echo"Coche girando<br/>";
    }
    function frenar(){
        echo"Coche frenando<br/>";
    }

}
?>