<?php

require_once __DIR__.'/prodotti.php';

class Cibo extends Prodotti{
    private $consistenza;
    private $materiaPrima;
    private $peso;

    function __construct(
        string $tipo,
        string $nome,
        float $prezzo,
        bool $disp,
        Categorie $categ,
        string $imgPath,
        string $consistenza,
        string $materiaPrima,
        int $peso
    ) {
        parent::__construct($tipo, $nome, $prezzo, $disp, $categ, $imgPath);
        $this->consistenza = $consistenza;
        $this->materiaPrima = $materiaPrima;
        $this->peso = $peso;
    }

    
    public function getConsistenza() {
        return $this->consistenza;
    }
    public function getMateriaPrima() {
        return $this->materiaPrima;
    }
    public function getPeso() {
        return $this->peso;
    }

    
    public function print() {
        echo "<ul>";
        parent::print();
        echo "<li>";
        echo "<strong>Consistenza: </strong>".$this->getConsistenza();
        echo "</li>";
        echo "<li>";
        echo "<strong>Materia Prima: </strong>".$this->getMateriaPrima();
        echo "</li>";
        echo "<li>";
        echo "<strong>Peso: </strong>".$this->getPeso()." g";
        echo "</li>";
        echo "</ul>";
    }
}