<style>
  .resultado{
    color: red;
    font-weight: bold;
    font-size: 32px;
  }
</style>

<?php

if(isset($_POST["button"])){

    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    //$resultado = $_POST["resultado"];
    calcular($operacion);
}
function calcular($calculo){
    switch($calculo){
    // switch($calculo): //Otra forma de iniciar un switch.
    /* switch (true){
        case $calculo == "suma" && "otra condición" : //Si queremos añadir mas de una condición para un switch.
    } */
        case "suma":
            global $numero1;
            global $numero2;
            $resultado = $numero1 +$numero2;
            echo " <p class = 'resultado'>El resultado es : $resultado</p>" ;
            break;
  
        case "resta":
            global $numero1;
            global $numero2;
            $resultado = ($numero1 - $numero2);
            echo " <p class = 'resultado'>El resultado es : $resultado</p>" ;
            break;

        case "multiplicación":
            global $numero1;
            global $numero2;
            $resultado = ($numero1 * $numero2);
            echo " <p class = 'resultado'>El resultado es : $resultado</p>" ;
            break;
   
        case "división":  
            global $numero1;
            global $numero2;
            $resultado = ($numero1 / $numero2);
            echo " <p class = 'resultado'>El resultado es : $resultado</p>" ;
            break;
     
        case "módulo":    
            global $numero1;
            global $numero2;
            $resultado = ($numero1 % $numero2);
            echo " <p class = 'resultado'>El resultado es : $resultado</p>" ;
            break;

        case "incremento":    
            global $numero1;
            $numero1++;
            $resultado = $numero1;
            echo " <p class = 'resultado'>El resultado es : $resultado</p>" ;
            break;
   
        case "decremento":    
            global $numero1;
            $numero1--;
            $resultado = $numero1;
            echo " <p class = 'resultado'>El resultado es : $resultado</p>" ;
            break;
        }
        //endswitch; //Para cerrar el switch si hemos usado dos puntos y no la llave. 
}
?>