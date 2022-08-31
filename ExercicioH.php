<?php
class Circulos{
    private $circulo;
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

public function comparaCirculo(Circulos $circulo1){
    return $circulo1->getCentroX() == $this->centroX && $circulo1->getCentroY() == $this->centroY && $circulo1->getRaio() == $this->raio ? "TRUE" : "FALSE";

}

public function area(Circulos $circulo3){
    return $this->pi * ($this->raio * $this->raio);
}

public function perimetro(Circulos $circulo5){
    return (2 * $this->pi) * $this->raio;
}

}
?>
<html>
    <head>
        <title>CIRCULO</title>
    </head>
    <body>
    <h2>PROGRAMA COM TODOS OS METODOS</h2><br>    
    <?php
    $c2 = new Circulos();
    $c2->setCentroX(20);
    $c2->setCentroY(6);
    $c2->setRaio(58);

    echo "<br>";
    echo "<br>ENCAPSULAMENTO";
    echo "<br>Circulo: (".$c2->getCentroX().",".$c2->getCentroY().")";
    echo "<br>Raio:".$c2->getRaio();

    $c3 = new Circulos(35,2,50);

    echo "<br>";
    echo "<br>CONSTRUTOR";
    echo "<br>Circulo: (".$c3->getCentroX().",".$c3->getCentroY().")";
    echo "<br>Raio:".$c3->getRaio();

    $c4 = new Circulos(20,4,60);
    $c5 = new Circulos(20,4,60);

    echo "<br>";
    echo "<br>COMPARA CÍRCULOS";
    echo "<br>Círculos iguais? " .$c4->comparaCirculo($c5);

    echo "<br>Circulo1: (".$c4->getCentroX().",".$c4->getCentroY().")";
    echo "<br>Raio1:".$c4->getRaio();
    echo "<br>Circulo2: (".$c5->getCentroX().",".$c5->getCentroY().")";
    echo "<br>Raio2:".$c5->getRaio();

    $c6 = new Circulos(10,15,5);
    
    echo "<br>";
    echo "<br>AREA";
    echo "<br>Círculo: (".$c6->getCentroX().",".$c6->getCentroY().")";
    echo "<br>Raio: ".$c6->getRaio();
    echo "<br>Area: ". $c6->area($c6);
    
    $c7 = new Circulos(10,15,5);

    echo "<br>";
    echo "<br>PERIMETRO";
    echo "<br>Círculo: (".$c7->getCentroX().",".$c7->getCentroY().")";
    echo "<br>Raio: ".$c7->getRaio();
    echo "<br>Perímetro: ". $c7->perimetro($c7);
    ?>
    </body>
</html>  