<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flujo de ejecución</title>
</head>
<body>
 
    <?php
             echo"Este es el primer mensaje <br>"; 
             //Estructura de un método o una función
             function dameDatos ( ) {
                echo"Este es el mensaje del interior de la fución <br>";
           }
           dameDatos();//utilizar un método interno.
             echo"Este es el segundo mensaje <br>"; 
             dameDatos();

             /*include ("metodo_reutilizado.php");//utilizar un método externo sin dar error en flujo de ejecucion si el nombre está mal escrito o el archivo externo no exsiste.
             datosComunes();*/
             require ("metodo_reutilizado.php");//utilizar un método externo, da error en flujo de ejecucion si el nombre está mal escrito o el archivo externo no exsiste.
             datosComunes();
    ?>
    
</body>
</html>