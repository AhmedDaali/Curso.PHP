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
        if(!strcmp("suma", $calculo)){
            global $numero1;
            global $numero2;
            $resultado = $numero1 +$numero2;
            echo " <p class = 'resultado'>El resultado es : $resultado</p>" ;
        }
        if(!strcmp("resta", $calculo)){
            global $numero1;
            global $numero2;
            $resultado = ($numero1 - $numero2);
            echo " <p class = 'resultado'>El resultado es : $resultado</p>" ;
        }
        if(!strcmp("multiplicación", $calculo)){
            global $numero1;
            global $numero2;
            $resultado = ($numero1 * $numero2);
            echo " <p class = 'resultado'>El resultado es : $resultado</p>" ;
        }
        if(!strcmp("división", $calculo)){
            global $numero1;
            global $numero2;
            $resultado = ($numero1 / $numero2);
            echo " <p class = 'resultado'>El resultado es : $resultado</p>" ;
        }
        if(!strcmp("módulo", $calculo)){
            global $numero1;
            global $numero2;
            $resultado = ($numero1 % $numero2);
            echo " <p class = 'resultado'>El resultado es : $resultado</p>" ;

        }
        if(!strcmp("incremento", $calculo)){
            global $numero1;
            $numero1++;
            $resultado = $numero1;
            echo " <p class = 'resultado'>El resultado es : $resultado</p>" ;
        }
        if(!strcmp("decremento", $calculo)){
            global $numero1;
            $numero1--;
            $resultado = $numero1;
            echo " <p class = 'resultado'>El resultado es : $resultado</p>" ;
        }
}
?>