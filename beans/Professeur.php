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
class Professeur {
    public $id;
    public $nom;
    public $Prenom;
    function __construct($id, $nom,$Prenom) {
        $this->id = $id;
        $this->nom = $nom;
        $this->Prenom=$Prenom;
    }
    public function getIdfiliere() {
        return $this->$id;
    }

    public function getNomfiliere() {
        return $this->$nom;
    }
    public function getAbreviation(){
        return $this->$Prenom;
    }


}
