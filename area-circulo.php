<?php
class Circulo_F{
    private $raio;
    private $centroX;
    private $centroY;
    private $pi = 3.14;
   
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

public function area(Circulo_F $circulo){
    return $this->pi * ($this->raio * $this->raio);
}

}
?>
<html>
    <head>
        <title>CIRCULO</title>
    </head>
    <body>
    <strong>(Exercicio F - CALCULAR AREA)</strong><br>    
    <?php 
    $c1 = new Circulo_F(10,15,5);
    
    echo "<br>Círculo: (".$c1->getCentroX().",".$c1->getCentroY().")";
    echo "<br>Raio: ".$c1->getRaio();
    echo "<br>Area: ". $c1->area($c1);
    ?>
    </body>
</html>  