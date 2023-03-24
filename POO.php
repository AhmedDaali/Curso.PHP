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
    class Coche {
        /** @var int $ruedas */
        public $ruedas;
        public string $color;
        public int $motor;


        public function __construct(){//Constructor
            
            $this->ruedas = 4;
            $this-> color = "Rojo";
            $this->motor = 1600;
        }

        function arrancar(){
            echo"Estoy arrancando<br/>";
        }
        function girar(){
            echo"Estoy girando<br/>";
        }
        function frenar(){
            echo"Estoy frenando<br/>";
        }

    }
    $renault = new Coche();//Estado inicial al objeto 
    $mazda = new Coche();
    $seat = new Coche();

    $renault->arrancar();
    echo $mazda->color;
    ?>
    
</body>
</html>