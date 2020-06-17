<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AbsenceService
 *
 * @author achraf bouirik
 */
include_once 'beans/Absence.php';
include_once 'connexion/Connexion1.php';
include_once 'dao/IDao.php';
class AbsenceService implements IDao{

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }

    public function create($o){
        $query="INSERT into absence values (?,?,?,?,?,?,null,?)";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getCne(),$o->getIdmatiere(),$o->getDate(),$o->getEtat(),$o->getHeuredebut(),$o->getHeurefin(),$o->getJustufication()));
    }
        public function findById1($id,$annee){
        
    }
    public function delete($id){
        $query="delete from absence where id_abs=?";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die;
        
    }
    public function update($o){
        $query="update absence set cne=?,id_matiere=?,Date=?,H_debut=?,H_fin=?,ETAT=?,justification=? where id_abs=? ";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getCne(),$o->getIdmatiere(),$o->getDate(),$o->getHeuredebut(),$o->getHeurefin(),$o->getEtat(),$o->getJustufication(),$o->getIdabsence()))
        or die;
    }
    public function findAll(){
        $query="SELECT absence.id_abs,absence.id_matiere as idMat,etudiant.nom,etudiant.prenom,absence.CNE,absence.Date,absence.ETAT,absence.H_debut as debut ,absence.H_fin as fin,absence.justification,matiere.libelle from absence,matiere,etudiant WHERE absence.CNE=etudiant.idetudiant and absence.id_matiere=matiere.idMatiere ORDER BY `absence`.`Date` DESC ";
        $req=$this->connexion->getConnexion()->query($query);
        $f=$req->fetchALL(PDO::FETCH_OBJ);
        return $f;
    }
     public function FindByN($us){
        $query='SELECT absence.id_abs,etudiant.nom,etudiant.prenom,absence.CNE,absence.Date,absence.ETAT,absence.H_debut as debut ,absence.H_fin as fin,absence.justification,matiere.libelle from absence,matiere,etudiant WHERE absence.CNE=etudiant.idetudiant and absence.id_matiere=matiere.idMatiere  and concat(etudiant.nom, etudiant.prenom) like ?"%" ORDER BY `absence`.`Date` DESC ';
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($us));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function FindByJ($us){
        $query='select justification from absence where cne=?';
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($us));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function findById($id){
        
    }
    public function findNumber(){
        $query='select count(absence.id_abs) as nombre ,etudiant.cne,etudiant.nom,etudiant.prenom,filiere.nomFiliere,absence.H_debut,absence.H_fin from filiere ,etudiant,absence where absence.CNE=etudiant.cne and etudiant.idFillere=filiere.idFillere group BY absence.CNE ORDER BY `absence`.`Date` DESC ';
        $req=$this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
         return $f;
    }
}
