<?php
class Circulo_C{
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

public function __construct( $centroX=0,  $centroY=0,  $raio=0)
{
    $this->centroX = $centroX;
    $this->centroY = $centroY;
    $this->raio = $raio;
}

}
?>

<html>
    <head>
        <title>CIRCULO</title>
    </head>
    <body>
    <strong>(Exercicio C - CONSTRUTOR)</strong><br>    
    <?php 
    $c1 = new Circulo_C(10,2,100);

    echo "<br>Circulo: (".$c1->getCentroX().",".$c1->getCentroY().")";
    echo "<br>Raio:".$c1->getRaio();
    ?>
    </body>
</html>  