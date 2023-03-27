<?php
/**
 * Clase Coche
 * 
 * Esta clase representa un coche con propiedades como el número de ruedas, la marca, el color y el motor.
 * También tiene métodos como arrancar, girar y frenar.
 */
class Coche  {
    /** @var int $ruedas El número de ruedas del coche */
    private int $ruedas;
    /** @var string $marca La marca del coche */
    private string $marca;
    /** @var string $color El color del coche */
    private string $color;
    /** @var int $motor El tamaño del motor en cc */
    private int $motor;
    

    /**
     * Constructor
     * 
     * Crea una instancia de la clase Coche con la marca y el color especificados.
     *
     * @param string $marca_coche La marca del coche
     * @param string $color_coche El color del coche
     */
    public function __construct($marca_coche, $color_coche){
        $this->marca = $marca_coche;
        $this->ruedas = 4;
        $this->color = $color_coche;
        $this->motor = 1600;
    }

    /**
    * Método para obtener la cantidad de ruedas del coche.
    * 
    * @return int Cantidad de ruedas del coche.
    */
   function get_ruedas (){
       return $this->ruedas;
   }

   /**
    * Método para obtener la marca del coche.
    * 
    * @return string Marca del coche.
    */
   function get_marca (){
       return $this->marca;
   }

   /**
    * Método para obtener el color del coche.
    * 
    * @return string Color del coche.
    */
   function get_color(){
       return $this->color;
   }

   /**
    * Método para obtener la potencia del motor del coche.
    * 
    * @return int Potencia del motor del coche.
    */
   function get_motor (){
       return $this->motor;
   }

   /**
    * Método para establecer la marca del coche.
    * 
    * @param string $marca_coche Nueva marca del coche.
    */
   function set_marca($marca_coche){
       $this->marca = $marca_coche;
   }

   /**
    * Método para establecer la cantidad de ruedas del coche.
    * 
    * @param int $ruedas_coche Nueva cantidad de ruedas del coche.
    */
   function set_ruedas($ruedas_coche){
       $this->ruedas = $ruedas_coche;
   }

   /**
    * Método para establecer el color del coche.
    * 
    * @param string $color_coche Nuevo color del coche.
    */
   function set_color($color_coche){
       $this->color = $color_coche;
   }

   /**
    * Método para establecer la potencia del motor del coche.
    * 
    * @param int $motor_coche Nueva potencia del motor del coche.
    */
   function set_motor($motor_coche){
       $this->motor = $motor_coche;
   }

   /**
    * Método para arrancar el coche.
    */
   function arrancar(){
       echo"Coche arrancando<br/>";
   }

   /**
    * Método para girar el coche.
    */
   function girar(){
       echo"Coche girando<br/>";
   }

   /**
    * Método para frenar el coche.
    */
    function frenar(){
        echo"Coche frenando<br/>";
    }
}
?>