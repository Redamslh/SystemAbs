<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

include_once 'C:\wamp64\www\Ab\beans\Etudiant.php';
include_once 'C:\wamp64\www\Ab\connexion\connexion.php';
include_once 'C:\wamp64\www\Ab\dao\IDao.php';

class EtudiantService implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }

    public function create($o) {
        $query = "INSERT INTO `etudiant`(`idFiller`, `cne`, `idAbsence`, `nom`, `prenom`, `tel`, `telP`) "
                . "VALUES (?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getIdFiller(), $o->getCne(), $o->getidAbsence(), $o->getNom(), $o->getPrenom(), $o->getTel(),
                    $o->getTelP())) or die('Error');
    }

    public function delete($cin) {
        $query = "DELETE FROM Employe WHERE cne = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($cne)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from etudiant";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

    public function findById($cne) {
        $query = "select * from etudiant where cne =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($cne));
        $res = $req->fetch(PDO::FETCH_OBJ);
        $employe = new Etudiant($res->cne, $res->idFiller, $res->idAbsence, $res->nom, $res->prenom, $res->tel, $res->telp);
        return $employe;
    }

    public function update($o) {
        $query = "UPDATE etudiant SET  idFiller=?, idAbsence=?, nom=?, prenom =?, tel =?, telp =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getIdFiller(), $o->getCne(), $o->getidAbsence(), $o->getNom(), $o->getPrenom(), $o->getTel(),
                    $o->getTelP())) or die('Error');
    }

    public function getHeureAbs($idFiller) {
        $query = "select nom,prenom,count(*) as nbreAbs from etudiant,absence where etudiant.cne=absence.cne and ETAT='justifie' and idFillere=? GROUP by absence.CNE";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($idFiller));
        $res = $req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function getHeureAbs2($id) {
        $query = "select nom,prenom,count(*) as nbreAbs from etudiant,absence where etudiant.cne=absence.cne and ETAT='non justifie' and idFillere=? GROUP by absence.CNE";
        $req = $this->connexion->getConnexion()->query($query);
        $req->execute(array($id));
        $res = $req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function findById1($id, $annee) {
        
    }
    public function findByGroupeId($id) {
        $query = "select etudiant.idetudiant ,etudiant.nom,etudiant.prenom from etudiant ,groupe,groupeetudiant where etudiant.idetudiant=groupeetudiant.idetudiant and groupe.id=groupeetudiant.idgroupe and groupe.id=?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }

}
