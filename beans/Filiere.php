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
    function __construct($idfiliere, $nomfiliere,$abreviation) {
        $this->idfiliere = $idfiliere;
        $this->nomfiliere = $nomfiliere;
        $this->abreviation=$abreviation;
    }
    public function getIdfiliere() {
        return $this->idfiliere;
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
