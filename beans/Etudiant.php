<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employe
 *
 * @author mosab
 */
class Etudiant {

    private $idFiller;
    private $cne;
    private $idAbsence;
    private $nom;
    private $prenom;
    private $tel;
    private $telP;
    private $Grp;

    function __construct($cne, $idFiller, $idAbsence, $nom, $prenom, $tel, $telP,$Grp) {
        $this->cne = $cne;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
        $this->telP = $telP;
        $this->idAbsence = $idAbsence;
        $this->idFiller = $idFiller;
         $this->Grp = $Grp;
    }

    function getCne() {
        return $this->cne;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getIdAbsence() {
        return $this->idAbsence;
    }

    function getTel() {
        return $this->tel;
    }

    function getTelp() {
        return $this->telp;
    }

    function getidFiller() {
        return $this->idFiller;
    }
    function getGrp() {
        return $this->idFiller;
    }
    function setCne($cne) {
        $this->cne = $cne;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setEmail($tel) {
        $this->tel = $tel;
    }

    function setTelephone($telP) {
        $this->telP = $telP;
    }

    function setIdFiller($idFiller) {
        $this->idFiller = $idFiller;
    }

    function setPassword($idAbsence) {
        $this->idAbsence = $idAbsence;
    }

}

