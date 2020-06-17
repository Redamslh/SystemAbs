<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FilereService
 *
 * @author achraf bouirik
 */
include_once "beans/Filiere2.php";
include_once "connexion/Connexion1.php";
include_once "dao/IDao.php";

class FilereService implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }

    public function findById1($id, $annee) {
        
    }

    public function create($o) {
        $query = "insert into filiere values (?,NULL,'1',?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $f=$req->execute(array($o->getAbreviation(), $o->getNomfiliere(), $o->getIdDep())) or die;
        return $f;
    }

    public function delete($id) {
        $query = "delete from filiere where idFillere=?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die;
    }

    public function update($o) {
        $query = "update filiere set abreveation=?,nomFiliere=?,idDep=? where idFillere=?";
        $req=$this->connexion->getConnexion()->prepare($query);
       $f= $req->execute(array($o->getAbreviation(),$o->getNomfiliere(),$o->getIdDep(),$o->getIdfiliere()));
        return $f;
    }

    public function findAll() {
        $query = "select filiere.* ,departement.nomDepartement  from departement,filiere where filiere.idDep=departement.idDep ";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

    public function findNotYet() {
        $query = 'SELECT utilisateur.nom,utilisateur.idutulisateur from  utilisateur ';
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

    public function findById($id) {
        $query = "select * from filiere where id=?";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetch(PDO::FETCH_OBJ);
        return $f;
    }

}
