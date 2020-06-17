<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utulisateur
 *
 * @author achraf bouirik
 */
class Utulisateur {
    public $login;
    public $nom;
    public $password;
    public $prenom;
    public $role;
    public $idutulisateur;
    public $telephone;
    public $email;
    function __construct($login, $nom, $password, $prenom, $role, $idutulisateur, $telephone, $email) {
        $this->login = $login;
        $this->nom = $nom;
        $this->password = $password;
        $this->prenom = $prenom;
        $this->role = $role;
        $this->idutulisateur = $idutulisateur;
        $this->telephone = $telephone;
        $this->email = $email;
    }
    public function getLogin() {
        return $this->login;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getRole() {
        return $this->role;
    }

    public function getIdutulisateur() {
        return $this->idutulisateur;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function setIdutulisateur($idutulisateur) {
        $this->idutulisateur = $idutulisateur;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }


}
