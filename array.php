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
    $semana [] ="Lunes";//Sino ponemos el índice, php lo pone automáticamente.
    $semana [] ="Martes";
    $semana [2] ="Miercoles";
    $semana [3] ="Jueves";

    $semana2 = array("Lunes","Martes","Miercoles","Jueves");

    echo $semana[0] . "<br/>";
    echo $semana2[0] . "<br/>";
    echo $semana [3] . "<br/>";
    echo $semana[2] . "<br/>";

    ?>
</body>
</html>