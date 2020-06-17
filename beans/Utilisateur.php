<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Utlisateur {

    private $login;
    private $nom;
    private $password;
    private $prenom;
 private $email;
    function __construct($login,$email, $password) {
        $this->login = $login;
        $this->email = $email;
        $this->password = $password;

    }
    function getLg() {
        return $this->login;
    }

    function getNom() {
        return $this->nom;
    }

    function getPswd() {
        return $this->password;
    }
    function getEmail() {
        return $this->email;
    }

    function getPnm() {
        return $this->prenom;
    }
    function setLg($login) {
        $this->login = $login;
    }
    function setNom($nom) {
        $this->nom=$nom;
    }
    function setPnm($prenom) {
        $this->prenom = $prenom;
    }
    function setPswd($password) {
        $this->password = $password;
    }
}
