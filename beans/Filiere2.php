<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Filiere
 *
 * @author achraf bouirik
 */
class Filiere {
    public $idfiliere;
    public $nomfiliere;
    public $abreviation;
    public $idDep;
    public $niveau;
    public $idchef;
    function __construct($idfiliere, $nomfiliere, $abreviation, $idDep, $niveau) {
        $this->idfiliere = $idfiliere;
        $this->nomfiliere = $nomfiliere;
        $this->abreviation = $abreviation;
        $this->idDep = $idDep;
        $this->niveau = $niveau;
    }
    public function getIdDep() {
        return $this->idDep;
    }

    public function getNiveau() {
        return $this->niveau;
    }

    public function getIdchef() {
        return $this->idchef;
    }

        public function getIdfiliere() {
        return $this->idfiliere;
    }
    public function setIdDep($idDep) {
        $this->idDep = $idDep;
    }

    public function setNiveau($niveau) {
        $this->niveau = $niveau;
    }

    public function setIdchef($idchef) {
        $this->idchef = $idchef;
    }

        public function getNomfiliere() {
        return $this->nomfiliere;
    }
    public function getAbreviation(){
        return $this->abreviation;
    }
    public function setAbreviation($abreviation){
        $this->abreviation=$abreviation;
    }
    public function setIdfiliere($idfiliere) {
        $this->idfiliere = $idfiliere;
    }

    public function setNomfiliere($nomfiliere) {
        $this->nomfiliere = $nomfiliere;
    }


}
