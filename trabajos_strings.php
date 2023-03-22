<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajos Strings</title>
    <style>
        .resaltar{
            color:brown;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    //hay que intercalar la comillas simples con las dobles para que no de error
             echo"<p class='resaltar'>Esto es un ejemplo de frase</p>";
             echo'<p class="resaltar">Esto es un ejemplo de frase</p>';
     //Esta manera también  da el mismo resultado.        
             echo"<p class=\"resaltar\">Esto es un ejemplo de frase</p>";

             $variable1="casa";
             $variable2="CASA";

             $resultado1 = strcmp($variable1,$variable2);// Es un comparativo de cadenas.
             //Devuelve 1 si no son iguales y 0 si  son  iguales. Considerando las mayúsculas

             $resultado2 = strcasecmp($variable1,$variable2);//Lo mismo sin considerar las mayúsculas. 

             echo"El resultado es: $resultado1<br/>";

             if($resultado1){
                echo"no coinciden<br/>";
             }else{          
                echo"coinciden<br/>";
             }
             echo"El resultado es: $resultado2<br/>";

             if($resultado2){
                echo"no coinciden<br/>";
             }else{
                echo"coinciden<br/>";
             }
            
    ?>
    
</body>
</html>