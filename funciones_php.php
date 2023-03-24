<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre1 = "JUAN";
    echo(strtolower($nombre1)) . "<br/>";//Convierte a minúsculas  una cadena

    $nombre2 = "maría";
    echo(strtoupper($nombre2)) . "<br/>";//Convierte a mayúsculas  una cadena

    function suma ($num1, $num2){

          $resultado = $num1 + $num2;

          return $resultado;
    }
    echo(suma(1,2)) . "<br/>";

    function frase_mayus ($frase, $conversion = true){

        $frase = strtolower($frase);

        if($conversion == true){
            $resultado = ucwords($frase);//Convierte a mayúsculas el primer caracter de cada palabra de una cadena 
        }else{
            $resultado = strtoupper($frase);//Convierte a mayúsculas  una cadena
        }

        return $resultado;
  }
  echo(frase_mayus("esto es una prueba")) . "<br/>";
  echo(frase_mayus("esto es una prueba",false)) . "<br/>";
    ?>
</body>
</html>