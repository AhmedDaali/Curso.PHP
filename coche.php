<?php
class Coche  {
    /** @var int $ruedas */
    private int $ruedas;
    private string $marca;
    private string $color;
    private int $motor;
    


    public function __construct($marca_coche, $color_coche){//Constructor
        $this->marca = $marca_coche;
        $this->ruedas = 4;
        $this-> color = $color_coche;
        $this->motor = 1600;
    }

    function get_ruedas (){
        return $this->ruedas;
    }
    function get_marca (){
        return $this->marca;
    }
    function get_color(){
        return $this->color;
    }
    function get_motor (){
        return $this->motor;
    }
    function set_marca($marca_coche){
        $this->marca = $marca_coche;
    }
    function set_ruedas($ruedas_coche){
        $this->ruedas = $ruedas_coche;
    }

    function set_color($color_coche){
        $this->color = $color_coche;
    }

    function set_motor($motor_coche){
        $this->motor = $motor_coche;
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