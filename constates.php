<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <?php
          
          define("AUTOR", "Juan");// Constante que definimos. El nombre de la constante va en mayúsculas siempre.
          echo "El autor es : AUTOR <br/>";
          echo "El autor es :  " . AUTOR . "<br/>";// Hay que concatenar el nombre de la constante para ver lo que almacena.

          
          echo "La linea de código donde estamos trabajando es : " . __LINE__ . "<br/>";
          echo"El archivo en el que estamos trabajando  es: " . __FILE__ . "<br/>";
          echo"El directorio en el que estamos trabajando  es: " . __DIR__ . "<br/>";
          echo"Nombre de la función: " . __FUNCTION__ . "<br/>";
          echo"	Nombre de la clase: " . __CLASS__ . "<br/>";
          echo"	El nombre del trait. El nombre del trait incluye el espacio de nombres en el que fue declarado (p.e.j. Foo\Bar): " . __TRAIT__ . "<br/>";
          echo"Nombre del espacio de nombres actual: " . __NAMESPACE__ . "<br/>";
          echo"	Nombre del método de la clase: " . __METHOD__ . "<br/>";
    ?>
</body>
</html>