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

    include ("coche.php");

    $coche1 = new Coche("Renault","Rojo");//Estado inicial al objeto 
    $coche2 = new Coche("Mazda","Verde");
    $coche3 = new Coche("Seat","Azul");

    echo $coche1->marca . "<br/>";
    $coche1->arrancar();
    echo $coche1->ruedas . "<br/>";
    echo $coche1->color . "<br/>";

    echo $coche2->marca . "<br/>";
    $coche2->girar();
    echo $coche2->ruedas . "<br/>";
    echo $coche2->color . "<br/>";

    echo $coche3->marca . "<br/>";
    $coche3->frenar();
    echo $coche3->ruedas . "<br/>";
    echo $coche3->color . "<br/>";
   
    ?>
    
</body>
</html>