<?php
//Ejercicio: Crea de la misma estructura, la superclase Vehiculo, y las subclases Coche, Avion y Barco. Vehiculo tendrá al menos 1 atributo y 2 metodos específicos. Después cada sbuclase Coche, Avion y Barco tendrán al menos 1 atributo y 1 método específico

class Vehiculo {
  protected $rueta;
  public function __construct($rueta) {
      $this->rueta = $rueta;
  }
  public function getRueta() {
      return $this->rueta;
  }
  public function move() {
    echo "Vehiculul se deplaseaza cu ".$this->rueta." roti.";
  }
}
class Coche extends Vehiculo {
  private $name;
  public function __construct($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function move() {
    echo "Masina cu numele ".$this->name." se deplaseaza cu ".$this->getRueta()." roti.";
  }
}
class Avion extends Vehiculo {
  private $vola;
  public function __construct($vola) {
    $this->vola = $vola;
  }
  public function getVola() {
    return $this->vola;
  }
  public function move(){
    echo "Avionul cu numele ".$this->getVola()." se deplaseaza prin aer.";
  }
}
class Barco extends Vehiculo {
  private $yacht;
  public function __construct($yacht) {
    $this->yacht = $yacht;
  }
  public function getYacht() {
    return $this->yacht;
  }
  public function move(){
    echo "Barca cu numele ".$this->getYacht()." se deplaseaza pe apa cu ajutorul motoarelor.";
  }
}
$coche = new Coche("Volvo");
$coche->move(); // Masina cu numele Volvo se deplaseaza cu 4 roti.
echo "\n";
//echo $coche->getName(); // Volvo

$avion = new Avion("Airbus");
$avion->move(); // Avionul cu numele Airbus se deplaseaza prin aer.
echo "\n";
//echo $avion->getVola(); // Airbus

$barco = new Barco("Momo");
$barco->move(); // Barca cu numele Momo se deplaseaza pe apa cu ajutorul motoarelor.
echo "\n";
//echo $barco->getYacht(); // Momo
?>