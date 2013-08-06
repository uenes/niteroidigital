<?php

class TemplatePagina {

    private $nomePagina;
    private $tituloPagina;

    public function __construct() {
    }

    public function getNomePagina () {
        return $this->nomePagina;
    }
    
    public function setNomePagina($nome) {
        $this->nomePagina = $nome;
    }
    
    public function getTituloPagina () {
        return $this->tituloPagina;
    }
    
    public function setTituloPagina($titulo) {
        $this->tituloPagina = $titulo;
    }

}

?>