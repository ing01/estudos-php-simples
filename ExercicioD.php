<?php
class Circulo_D{
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

public function comparaCirculo(Circulo_D $circulo1){
    return $circulo1->getCentroX() == $this->centroX && $circulo1->getCentroY() == $this->centroY && $circulo1->getRaio() == $this->raio ? "TRUE" : "FALSE";

}

}
?>
<html>
    <head>
        <title>CIRCULO</title>
    </head>
    <body>
    <strong>(Exercicio D - CIRCULOS IGUAIS)</strong><br>    
    <?php 
    $c1 = new Circulo_D(10,2,100);
    $c2 = new Circulo_D(10,2,100);

    echo "<br>Círculos iguais? " .$c1->comparaCirculo($c2);

    echo "<br>Circulo1: (".$c1->getCentroX().",".$c1->getCentroY().")";
    echo "<br>Raio1:".$c1->getRaio();
    echo "<br>Circulo2: (".$c2->getCentroX().",".$c2->getCentroY().")";
    echo "<br>Raio2:".$c2->getRaio();
    ?>
    </body>
</html>  