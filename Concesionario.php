<?php
/**
 * Clase Compra_vehiculo
 *
 * Esta clase representa una compra de vehículo, con opciones para personalizar el vehículo y calcular el precio final.
 *
 * @property int $precio_base Precio base del vehículo, según la gama elegida.
 * @staticvar int $ayuda Monto de ayuda del gobierno para la compra del vehículo.
 */
class Compra_vehiculo{
		
    private $precio_base;
    static $ayuda=0;
		
    /**
     * Constructor de la clase.
     *
     * @param string $gama Gama del vehículo a comprar: "urbano", "compacto" o "berlina".
     * @return void
     */
    public function __construct($gama){

        if($gama=="urbano"){
            $this->precio_base=10000;
        }else if($gama=="compacto"){
            $this->precio_base=20000;	
        }else if($gama=="berlina"){
            $this->precio_base=30000;			
        }		
    }// fin constructor
		
    /**
     * Aplica el descuento del gobierno en caso de ser posible.
     *
     * @return void
     */
    static function descuento_gobierno(){

        if(date("m-d-y")>("03-01-15")){
            self :: $ayuda = 4500;
        }
    }//Fin descuento_gobierno
		
    /**
     * Agrega el climatizador al vehículo.
     *
     * @return void
     */
    function climatizador(){		
        $this->precio_base+=2000;					
    }// fin climatizador
		
    /**
     * Agrega el navegador GPS al vehículo.
     *
     * @return void
     */
    function navegador_gps(){
        $this->precio_base+=2500;	
    }//fin navegador gps
		
    /**
     * Agrega la tapicería de cuero al vehículo, según el color elegido.
     *
     * @param string $color Color de la tapicería: "blanco", "beige" o cualquier otro color.
     * @return void
     */
    function tapiceria_cuero($color){
			
        if($color=="blanco"){
            $this->precio_base+=3000;
        }else if($color=="beige"){
            $this->precio_base+=3500;
        }else{
            $this->precio_base+=5000;
        }
    }// fin tapicería
		
    /**
     * Calcula el precio final del vehículo, incluyendo los descuentos y las opciones elegidas.
     *
     * @return int Precio final del vehículo.
     */
    function precio_final(){
			
        $valor_final=$this->precio_base-self::$ayuda;
        return $valor_final;	
    }// fin precio final
			
}// fin clase
