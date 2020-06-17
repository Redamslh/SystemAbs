<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of groupe
 *
 * @author achraf bouirik
 */
class Groupe {
    public $id;
    public $num;
    public $salle;
    public $idmatiere;
    public $annee;
    public $idFil;
    function __construct($id, $num, $salle, $idmatiere, $annee,$idFil) {
        $this->id = $id;
        $this->num = $num;
        $this->salle = $salle;
        $this->idmatiere = $idmatiere;
        $this->annee = $annee;
        $this->idFil = $idFil;
    }
    public function getId() {
        return $this->id;
    }

    public function getNum() {
        return $this->num;
    }

    public function getSalle() {
        return $this->salle;
    }

    public function getIdmatiere() {
        return $this->idmatiere;
    }

    public function getAnnee() {
        return $this->annee;
    }
     public function getFil() {
        return $this->idFil;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNum($num) {
        $this->num = $num;
    }

    public function setSalle($salle) {
        $this->salle = $salle;
    }

    public function setIdmatiere($idmatiere) {
        $this->idmatiere = $idmatiere;
    }

    public function setAnnee($annee) {
        $this->annee = $annee;
    }


}
