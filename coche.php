<?php
error_reporting(E_ALL); ini_set('display_errors', '1');

class Coche
{
    private $marca;
    private $modelo; 

    public function __construct($marca, $modelo)
    {
      $this->marca = $marca;
      $this->modelo = $modelo;
     
    }

    public function getValues() {
        echo "El auto es de marca: ".$this->marca." y de modelo: ".$this->modelo;
    }
}

$objValue = new Coche('Mercedes Benz', '2023');
echo $objValue->getValues();

?>