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
        // Declaración de un array llamado $semana
    // El índice 0 se asignará automáticamente al primer elemento, luego se le asignarán índices consecutivos
    $semana [] ="Lunes";//Sino ponemos el índice, php lo pone automáticamente.
    $semana [] ="Martes";
    $semana [2] ="Miercoles";
    $semana [3] ="Jueves";

    // Declaración de un array llamado $semana2
    // Se le asignan todos los elementos del array al momento de declararlo
    $semana2 = array("Lunes","Martes","Miercoles","Jueves");//Meter todos los datos de una vez.

    // Declaración de un array asociativo llamado $semana3
    // Los elementos del array se identifican con una clave, en este caso "dia1", "dia2", "dia3" y "dia4"
    $semana3 = array("dia1"=>"Lunes", "dia2"=>"Martes","dia3"=>"Miercoles","dia4"=>"Jueves");//A modo de diccionário.

    echo $semana[0] . "<br/>";
    echo $semana2[0] . "<br/>";
    echo $semana3["dia1"] . "<br/>";
    echo"====================<br/>";

    echo $semana [3] . "<br/>";
    echo $semana2[2] . "<br/>";
    echo"====================<br/>";

    
    echo $semana3["dia2"] . "<br/>";
    echo $semana3["dia3"] . "<br/>";
    echo $semana3["dia4"] . "<br/>";
    echo"====================<br/>";

    foreach ($semana3 as $clave =>$valor){//Recorrer el diccionário. 

    echo $clave . ": " . $valor . "<br/>";
    }
    echo"====================<br/>";

    for($i = 0; $i <count ($semana2 ); $i++){
        sort ($semana2);//Ordena los valores de un array alfabéticamente
        echo $i . ": ". $semana2[$i] . "<br/>";
    }
    echo"====================<br/>";
    //Añadimos elemntos al array asociativo.
    $semana3["dia5"] = "Viernes";
    foreach ($semana3 as $clave =>$valor){//Recorrer el diccionário. 

        echo $clave . ": " . $valor . "<br/>";
        }
        echo"====================<br/>";
    $alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                                    "cítrico"=>"mdandareina",
                                                    "otros"=>"manzana"),
                            "leche"=>array("animal"=>"vaca",
                                                    "vegetal"=>"coco"),
                          "carne"=>array("vacuno"=>"lomo",
                                                    "porcino"=>"pata"));
    echo"====================<br/>";
  echo $alimentos["carne"]["vacuno"] . "<br/>";     
  
  echo"====================<br/>";
  foreach($alimentos as $clave_alim=>$alim){
    echo"clave_alim: <br/>";
    while(list($clave, $valor) =each($alim)){
        echo "$clave = $valor<br/>";
    }
    echo"<br/>";
  }                                   
    ?>
</body>
</html>