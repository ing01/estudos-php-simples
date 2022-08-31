<?php
class Circulo_A{
    private $circulo;
}
?>

<html>
    <head>
        <title>CIRCULO</title>
    </head>
    <body>
    (Exercicio A)<br>    

         <?php 
            $c1 = new Circulo_A();
            $c1->centroX = 10;
            $c1->centroY = 2;
            $c1->raio = 100;

            echo "<br>Circulo: (".$c1->centroX.",".$c1->centroY.")";
            echo "<br>Raio:".$c1->raio;
        ?>
    </body>
</html>    
