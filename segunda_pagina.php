<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segunda página</title>
</head>
<body>

    <?php
    $nombre = "Juan";
    $edad = 18;

    print "El nombre del usuario es: " .  $nombre  . "<br>";
    print "El nombre del usuario es:  $nombre<br>";//Escribe el valor de la  variable
    print 'El nombre del usuario es:  $nombre <br>';//escribe el literal y no la variable almacenada dentro
    
    echo $nombre, $edad;//adimete varias variables sin concatenar, también es mas comun y rápido
    echo "<br>El nombre del usuario es:  $nombre y     tiene $edad años";
    ?>
    
</body>
</html>