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

        for($i = 0; $i<=10; $i++){
            echo "9 x $i = ". 9 * $i ."<br/>";
        }
        echo"Fin de la tabla de multiplicación.<br/>";
        echo"<br/>";
        for($i = 10; $i>=-10; $i--){
            if($i==0){
                echo"No se puede dividir por 0<br/>";
                continue;
            }
            echo "9 / $i = ". 9 /$i ."<br/>";
        }
        echo"Fin de dividir.<br/>";
        echo"<br/>";
        echo"Hemos empezado el bucle";
         for($i = 0; $i<=10; $i++){
            echo "<p>$i</p>";
          }
          for($j = 9; $j>=0; $j--){
            echo "<p>$j</p>";
          }
          echo"Hemos terminado el bucle";
    ?>
</body>
</html>