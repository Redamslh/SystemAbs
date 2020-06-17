<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Absence
 *
 * @author achraf bouirik
 */
class Absence {
    public $cne;
    public $idmatiere;
    public $date;
    public $etat;
    public $heuredebut;
    public $heurefin;
    public $idabsence;
    public $justufication;
    function __construct($cne, $idmatiere, $date, $etat, $heuredebut, $heurefin, $idabsence, $justufication) {
        $this->cne = $cne;
        $this->idmatiere = $idmatiere;
        $this->date = $date;
        $this->etat = $etat;
        $this->heuredebut = $heuredebut;
        $this->heurefin = $heurefin;
        $this->idabsence = $idabsence;
        $this->justufication = $justufication;
    }
    public function getCne() {
        return $this->cne;
    }

    public function getIdmatiere() {
        return $this->idmatiere;
    }

    public function getDate() {
        return $this->date;
    }

    public function getEtat() {
        return $this->etat;
    }

    public function getHeuredebut() {
        return $this->heuredebut;
    }

    public function getHeurefin() {
        return $this->heurefin;
    }

    public function getIdabsence() {
        return $this->idabsence;
    }

    public function getJustufication() {
        return $this->justufication;
    }

    public function setCne($cne) {
        $this->cne = $cne;
    }

    public function setIdmatiere($idmatiere) {
        $this->idmatiere = $idmatiere;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
    }

    public function setHeuredebut($heuredebut) {
        $this->heuredebut = $heuredebut;
    }

    public function setHeurefin($heurefin) {
        $this->heurefin = $heurefin;
    }

    public function setIdabsence($idabsence) {
        $this->idabsence = $idabsence;
    }

    public function setJustufication($justufication) {
        $this->justufication = $justufication;
    }


    
}
