<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Matiere
 *
 * @author achraf bouirik
 */
class Matiere {
    public $idmatiere;
    public $idmodule;
    public $libelle;
    public $prof;
    public $typematiere;
    function __construct($idmatiere, $idmodule, $libelle, $typematiere) {
        $this->idmatiere = $idmatiere;
        $this->idmodule = $idmodule;
        $this->libelle = $libelle;
        $this->typematiere = $typematiere;
    }
    public function getIdmatiere() {
        return $this->idmatiere;
    }

    public function getIdmodule() {
        return $this->idmodule;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function getProf() {
        return $this->prof;
    }

    public function getTypematiere() {
        return $this->typematiere;
    }

    public function setIdmatiere($idmatiere) {
        $this->idmatiere = $idmatiere;
    }

    public function setIdmodule($idmodule) {
        $this->idmodule = $idmodule;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    public function setProf($prof) {
        $this->prof = $prof;
    }

    public function setTypematiere($typematiere) {
        $this->typematiere = $typematiere;
    }



    
}
