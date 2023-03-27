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

    echo $coche1->get_marca() . "<br/>";
    $coche1->arrancar();
    echo $coche1->get_ruedas() . "<br/>";
    echo $coche1->get_color() . "<br/>";
    echo $coche1->set_motor(2000);
    echo $coche1->get_motor() . "<br/>";
    echo  "<br/>";

    echo $coche2->get_marca() . "<br/>";
    $coche2->girar();
    echo $coche2->get_ruedas() . "<br/>";
    echo $coche2->get_color() . "<br/>";
    echo $coche2->set_motor(3000);
    echo $coche2->get_motor() . "<br/>";
    echo  "<br/>";

    echo $coche3->get_marca() . "<br/>";
    $coche3->frenar();
    echo $coche3->get_ruedas() . "<br/>";
    echo $coche3->get_color() . "<br/>";
    echo $coche3->set_motor(2500) ;
    echo $coche3->get_motor() . "<br/>";
    echo  "<br/>";
   
    ?>
    
</body>
</html>