<?php
class Vehiculo {
    protected string $marca;
    /** @var int $ruedas */
    protected $ruedas;
    protected string $color;
    protected int $motor;


    protected function __construct($marca_vehiculo, $ruedas_vehiculo, $color_vehiculo, $motor_vehiculo){//Constructor
        $this->marca = $marca_vehiculo;
        $this->ruedas = $ruedas_vehiculo;
        $this-> color = $color_vehiculo;
        $this->motor = $motor_vehiculo;
    }

    function arrancar(){
        echo"Estoy arrancando<br/>";
    }
    function girar(){
        echo"Estoy girando<br/>";
    }
    function frenar(){
        echo"Estoy frenando<br/>";
    }

}
?>