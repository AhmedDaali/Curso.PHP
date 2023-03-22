<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo variable estática</title>
</head>
<body>
    <?php
    //la variable contador al finalizar la función siempre se borrará el valor acumulado. 
            function incrementaVariable1(){
                $contador = 0;
                $contador++;
                echo $contador . "<br>";
            }
            incrementaVariable1();
            incrementaVariable1();
            incrementaVariable1();
            incrementaVariable1();
            echo "<br>";

            //Si ponemos static el valor de la variable no se borra al finalizar la función. Y seguirá sumando al valor último.
            function incrementaVariable2(){
                static $contador = 0;
                $contador++;
                echo $contador . "<br>";
            }
            incrementaVariable2();
            incrementaVariable2();
            incrementaVariable2();
            incrementaVariable2();
    ?>
    
</body>
</html>