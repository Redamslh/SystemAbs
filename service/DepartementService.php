<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DepartementService
 *
 * @author achraf bouirik
 */
include_once 'beans/Departement.php';
include_once 'connexion/Connexion1.php';
include_once 'dao/IDao.php';

class DepartementService implements IDao{

    private $connexion;

function __construct() {
        $this->connexion = new Connexion();
    }

   

    public function create($o){
        $query="INSERT into departement values (NULL,?,?,?)";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNomDepartement(),$o->getIdchefdep(),$o->getAbrev()));
    }
        public function findById1($id,$annee){
        
    }
    public function delete($id){
        $query="delete from departement where idDep=?";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die;
        
    }
    public function update($o){
        $query="update departement set nomDepartement=?,idchefdep=?,abrev=? where idDep=?";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNomDepartement(),$o->getIdchefdep(),$o->getAbrev(),$o->getIdDep()))
        or die;
    }
    public function findAll(){
        $query="SELECT departement.abrev,departement.idchefdep,departement.idDep, departement.nomDepartement,utilisateur.nom,utilisateur.prenom from departement,utilisateur where departement.idchefdep=utilisateur.idutulisateur";
        $req=$this->connexion->getConnexion()->query($query);
        $f=$req->fetchALL(PDO::FETCH_OBJ);
        return $f;
    }
    public function findById($id){
        
    }
    public function findNotYet(){
        $query="SELECT utilisateur.nom,utilisateur.idutulisateur from  utilisateur LEFT JOIN  departement on utilisateur.idutulisateur=departement.idchefdep where utilisateur.idutulisateur not in (select departement.idchefdep from departement)";
        $req=$this->connexion->getConnexion()->query($query);
        $f=$req->fetchALL(PDO::FETCH_OBJ);
        return $f;
    }
    public function findNumber(){
        $query='select count(absence.id_abs) as nombre ,etudiant.cne,etudiant.nom,etudiant.prenom,filiere.nomFiliere,absence.H_debut,absence.H_fin from filiere ,etudiant,absence where absence.CNE=etudiant.cne and etudiant.idFillere=filiere.idFillere group BY absence.CNE';
        $req=$this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
         return $f;
    }

    public function getAbF() {
        
    }

    public function getHeureAbs($id) {
        
    }

    public function getHeureAbs2($id) {
        
    }

}

