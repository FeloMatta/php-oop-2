<?php

require_once __DIR__.'/prodotti.php';
require_once __DIR__.'/haMateriale.php';

class Giochi extends Prodotti{
    use HaMateriale;
    private $daEsterno;

    function __construct(
        string $tipo,
        string $nome,
        float $prezzo,
        bool $disp,
        Categorie $categ,
        string $imgPath,
        string $materiale,
        bool $daEsterno
    ) {
        parent::__construct($tipo, $nome, $prezzo, $disp, $categ, $imgPath);
        $this->materiale = $materiale;
        $this->daEsterno = $daEsterno;
    }

    
    public function getMateriale() {
        return $this->materiale;
    }
    public function getDaEsterno() {
        if($this->daEsterno) {
            return "Solo per esterni";
        }
        return "Solo per interni";
    }

    
    public function print() {
        echo "<ul>";
        parent::print();
        echo "<li>";
        echo "<strong>Materiale: </strong>".$this->getMateriale();
        echo "</li>";
        echo "<li>";
        echo "<strong>Utilizzo: </strong>".$this->getDaEsterno();
        echo "</li>";
        echo "</ul>";
    }
}
