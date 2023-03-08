<?php

require_once __DIR__.'/prodotti.php';
require_once __DIR__.'/haMateriale.php';

class Cucce extends Prodotti{
    use HaMateriale;
    private $capienza;

    function __construct(
        string $tipo,
        string $nome,
        float $prezzo,
        bool $disp,
        Categorie $categ,
        string $imgPath,
        string $materiale,
        string $capienza
    ) {
        parent::__construct($tipo, $nome, $prezzo, $disp, $categ, $imgPath);
        $this->materiale = $materiale;
        $this->capienza = $capienza;
    }

    
    public function getMateriale() {
        return $this->materiale;
    }
    public function getCapienza() {
        return $this->capienza;
    }

    
    public function print() {
        echo "<ul>";
        parent::print();
        echo "<li>";
        echo "<strong>Materiale: </strong>".$this->getMateriale();
        echo "</li>";
        echo "<li>";
        echo "<strong>Dimensioni: </strong>".$this->getCapienza();
        echo "</li>";
        echo "</ul>";
    }
}