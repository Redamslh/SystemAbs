<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Departement
 *
 * @author achraf bouirik
 */
class Departement {

    public $idDep;
    public $nomDepartement;
    public $idchefdep;
    public $abrev;
    function __construct($idDep, $nomDepartement, $idchefdep, $abrev) {
        $this->idDep = $idDep;
        $this->nomDepartement = $nomDepartement;
        $this->idchefdep = $idchefdep;
        $this->abrev = $abrev;
    }

    public function getIdDep() {
        return $this->idDep;
    }

    public function getNomDepartement() {
        return $this->nomDepartement;
    }

    public function getIdchefdep() {
        return $this->idchefdep;
    }

    public function getAbrev() {
        return $this->abrev;
    }

    public function setIdDep($idDep) {
        $this->idDep = $idDep;
    }

    public function setNomDepartement($nomDepartement) {
        $this->momDepartement = $nomDepartement;
    }

    public function setIdchefdep($idchefdep) {
        $this->idchefdep = $idchefdep;
    }

    public function setAbrev($abrev) {
        $this->abrev = $abrev;
    }


}
