<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Operadores</title>
</head>
<body>
    <p>&nbsp;</p>
    <form name="form1" method="post" action="">
        <p>
        <label for="num1"></label>
        <input type="text" name="num1" id="num1">
        <label for="num2"></label>
        <input type="text" name="num2" id="num2">
        <label for="operacion"></label>
        <select name="operacion" id="operacion">
            <option>suma</option>
            <option>resta</option>
            <option>multiplicación</option>
            <option>división</option>
            <option>módulo</option>
        </select>
        </p>
        <p>&nbsp;</p>
        <p>
            <label for="resultado">Resultado</label>
            <input type="text" name="resultado" id="resultado">
        </p>
        <p>&nbsp;</p>
        <p>
            <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
        </p>
    </form>

    <p>&nbsp;</p>

    <?php

           if(isset($_POST["button"])){

            $numero1 = $_POST["num1"];
            $numero2 = $_POST["num2"];
            $operacion = $_POST["operacion"];
            //$resultado = $_POST["resultado"];

            if(!strcmp("suma", $operacion)){
                //$resultado = parse_ini_string( $numero1 +$numero2) ;
               echo " El resultado es : " . ($numero1 + $numero2);
            }
            if(!strcmp("resta", $operacion)){
                // $resultado = ($numero1 + $numero2);
                echo " El resultado es : " . ($numero1 - $numero2);
             }
             if(!strcmp("multiplicación", $operacion)){
                // $resultado = ($numero1 + $numero2);
                echo " El resultado es : " . ($numero1 * $numero2);
             }
             if(!strcmp("división", $operacion)){
                // $resultado = ($numero1 + $numero2);
                echo " El resultado es : " . ($numero1 / $numero2);
             }
             if(!strcmp("módulo", $operacion)){
                // $resultado = ($numero1 + $numero2);
                echo " El resultado es : " . ($numero1 % $numero2);
             }

           }
    ?>
    
</body>
</html>