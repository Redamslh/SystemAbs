<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EtudiantService
 *
 * @author achraf bouirik
 */
include_once 'beans/Etudiant2.php';
include_once 'connexion/Connexion1.php';
include_once 'dao/IDao.php';

class EtudiantService implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }
 
    public function create($o) {
        $query = "insert into etudiant values (?,?,?,?,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getIdfiliere(),$o->getIdetudiant(), $o->getNom(),$o->getPrenom(),$o->getTel(),$o->getTelP(),$o->getNiveau(),$o->getDate(),$o->getEmail(),$o->getImg(),$o->getGrp())) or die('Error');
    }

    public function delete($cin) {
        $query = "DELETE FROM etudiant WHERE idetudiant = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($cin)) or die("erreur delete");
    }

    public function findAll() {
        $query = "

select etudiant.*,filiere.abreveation,groupe.num from etudiant,filiere,groupe where etudiant.idFillere=filiere.idFillere and groupe.id=etudiant.idgrp ";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

    public function findById($id) {
        $query = "select * from Fonction where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));
        $res = $req->fetch(PDO::FETCH_OBJ);
        $fonction = new Fonction($res->id, $res->code, $res->nom);
        return $fonction;
    }

    public function findById1($id, $annee) {
        
    }

    public function findFiliere() {
        $query = "select id , nom  from filiere";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

    public function findByGroupeId($id) {
        $query = "select etudiant.idetudiant ,etudiant.nom,etudiant.prenom from etudiant ,groupe,groupeetudiant where etudiant.idetudiant=groupeetudiant.idetudiant and groupe.id=groupeetudiant.idgroupe and groupe.id=? group BY etudiant.idetudiant";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE etudiant SET   idFillere=? ,nom=?,prenom=?,tel=?,telP=?, niveau=?,datedenaissance=?,email=?,img=?,idgrp=? where idetudiant = ? ";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getIdfiliere(), $o->getNom(),$o->getPrenom(),$o->getTel(),$o->getTelP(),$o->getNiveau(),$o->getDate(),$o->getEmail(),$o->getImg(),$o->getGrp(),$o->getIdetudiant()))
                or die('Error');
    }

    public function getCountEmploye() {
        $query = "SELECT count(employe.cin) as nombre,departement.id,departement.libelle from departement,employe WHERE departement.id=employe.departement GROUP BY departement.id";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

    public function getHeuresTravaille($id) {
        $query = "SELECT SUM(heure) as heure ,SUM(minute) as minute,prenom, cin as id ,month(date) as mois from pointageh where cin=?   group by Month(date)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

}
