<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejmplo ámbitos</title>
</head>
<body>
    <?php
             $nombre  = "Juan";

             echo $nombre."<br>";
             $nombre = "María";

             function dameNombre1() {
                $nombre ="María";
             }
             dameNombre1();
             echo $nombre."<br>";//No cambiará si no ponemos global dentro de la función ya que en php no se puede reasignar la variables

             function dameNombre(){
                global $nombre;
                $nombre = "María";
             }
             dameNombre();
             echo $nombre;
            
    ?>
    
</body>
</html>