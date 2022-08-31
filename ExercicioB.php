<?php

class Circulo_B{
    private $raio;
    private $centroX;
    private $centroY;
   

public function setRaio($raio)
{
    $this->raio = $raio;
}
public function getRaio()
{
    return $this->raio;
}

public function setCentroX($centroX)
{
    $this->centroX = $centroX;
}
public function getCentroX()
{
    return $this->centroX;
}

public function setCentroY($centroY)
{
    $this->centroY = $centroY;
}
public function getCentroY()
{
    return $this->centroY;
}
}
?>

<html>
    <head>
        <title>CIRCULO</title>
    </head>
    <body>
    <strong>(Exercicio B - ENCAPSULAMENTO)</strong><br>    
    <?php 
    $c1 = new Circulo_B();
    $c1->setCentroX(10);
    $c1->setCentroY(2);
    $c1->setRaio(100);

    echo "<br>Circulo: (".$c1->getCentroX().",".$c1->getCentroY().")";
    echo "<br>Raio:".$c1->getRaio();
    ?>
    </body>
</html>  