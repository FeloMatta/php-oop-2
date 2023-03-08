<?php

class Categorie {
    private $nome;
    private $icona;

    function __construct (string $nome, string $icona) {
        $this->nome = $nome;
        $this->icona = $icona;
    }
    
    
    public function getNome() {
        return $this->nome;
    }
    public function getIcona() {
        return $this->icona;
    }
}