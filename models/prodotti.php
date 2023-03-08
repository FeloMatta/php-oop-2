<?php

require_once __DIR__.'/categorie.php';

class Prodotti {
    protected $tipo;
    protected $nome;
    protected $prezzo;
    protected $disp;
    protected $categ;
    protected $imgPath;

    function __construct(
        string $tipo,
        string $nome,
        float $prezzo,
        bool $disp,
        Categorie $categ,
        string $imgPath
    ){
        $this->tipo = $tipo;
        $this->nome = $nome;

        if($prezzo >= 0) {
            $this->prezzo = $prezzo;
        }
        else {
            throw new Exception ('Non è possibile inserire un prezzo negativo');
        }
        
        $this->disp = $disp;
        $this->categ = $categ;
        $this->imgPath = $imgPath;
    }

    
    public function getTipo() {
        return $this->tipo;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getPrezzo() {
        return $this->prezzo;
    }
    public function getDisp() {
        return $this->disp;
    }
    public function getCateg() {
        return $this->categ;
    }
    public function getCategIcona() {
        return $this->categ->getIcona();
    }
    public function getImgPath() {
        return $this->imgPath;
    }


    
    protected function print(){
        echo "<li>";
        echo "<strong>Categoria: </strong>".$this->getCategIcona();
        echo "</li>";
        echo "<li>";
        echo "<strong>".$this->getNome()."</strong>";
        echo "</li>";
        echo "<li>";
        echo '<img src="'.$this->getImgPath().'" alt"'.$this->getNome().'"/>';
        echo "</li>";
        echo "<li>";
        echo "<strong>Prezzo: </strong>".$this->getPrezzo();
        echo "</li>";
        echo "<li>";
        echo "<strong>Disponibile: </strong>".$this->getDisp() ? 'Disponibile' : 'Non disponibile';
        echo "</li>";
    }
}