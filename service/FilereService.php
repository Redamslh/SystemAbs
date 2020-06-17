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
include_once "beans/Filiere.php";
include_once "connexion/Connexion.php";
include_once "dao/IDao.php";
class FilereService implements IDao{
   private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }
    public function create($o){
        $query="insert into filiere values ('null',?,?)";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNomfiliere(),$o->getAbreviation())) or die;
    }
    public function delete($id){
        $query="delete from filiere where id=?";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die;
    }
    public function update($id){
        $query="update filiere set nom=? abreviation=? where id=?";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die;
    }
    public function findAll(){
        $query="select * from filiere";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    public function findById($id){
        $query="select * from filiere where id=?";
        $req=$this->connexion->getConnexion()->query($query);
        $f = $req->fetch(PDO::FETCH_OBJ);
        return $f;
    }
    public function findEtdByFid($id){
        $query="select * from filiere where id=?";
        $req=$this->connexion->getConnexion()->query($query);
        $f = $req->fetch(PDO::FETCH_OBJ);
        return $f;
    }

    public function getHeureAbs($id) {
        $query = "SELECT * FROM ( select nom,prenom,count(*) as nbreAbs ,idFillere from etudiant,absence where etudiant.cne=absence.cne and ETAT='justifie' GROUP by absence.CNE union select nom,prenom,count(*)=0 as nbreAbs,idFillere from etudiant where cne not in (select cne from absence ) GROUP by cne ) A WHERE idFillere=? ORDER BY nom
";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }

    public function getHeureAbs2($id) {
        $query = "SELECT * FROM ( select nom,prenom,count(*) as nbreAbs ,idFillere from etudiant,absence where etudiant.cne=absence.cne and ETAT='non justifie' GROUP by absence.CNE union select nom,prenom,count(*)=0 as nbreAbs,idFillere from etudiant where cne not in (select cne from absence ) GROUP by cne ) A WHERE idFillere=? ORDER BY nom
";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function getAbF() {
        $query = "

select count(*) as nb,filiere.abreveation as abv from filiere,absence,etudiant where etudiant.idFillere=filiere.idFillere and etudiant.idetudiant=absence.CNE group by filiere.idFillere ";
         $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    public function getAbE() {
        $query = "select count(*) as nb,filiere.abreveation as abv from filiere,etudiant where etudiant.idFillere=filiere.idFillere group by filiere.idFillere";
         $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    public function getAbM() {
        $query = "select count(*) as nb from absence group by month(date)";
         $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
     public function getNet() {
        $query = "select count(*) as nb from etudiant ";
         $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    public function getNj() {
        $query = "select count(*) as nb from absence where etat='justifie'" ;
         $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    public function getNpr() {
        $query = "select count(*) as nb from professeur" ;
         $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    public function getNnj() {
        $query = "select count(*) as nb from absence where etat='non justifie'" ;
         $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    public function getPro() {
        $query = "

SELECT DISTINCT(nom),professeur.Prenom,departement.nomDepartement from emploiprof,professeur,filiere,departement where emploiprof.idProf=professeur.id and emploiprof.idFil=filiere.idFillere and departement.idDep=filiere.idDep " ;
         $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
     public function getPr() {
        $query = "
SELECT id,nom ,prenom from professeur" ;
         $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    public function getGr() {
        $query = "
SELECT * from groupe" ;
         $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    public function getMd() {
        $query = "
SELECT * from module" ;
         $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
     public function getMost() {
        $query = "


select CNE,etudiant.nom,etudiant.prenom,count(*) as nb from absence,etudiant where absence.CNE=etudiant.idetudiant GROUP by cne order by nb DESC LIMIT 5 " ;
         $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    public function getMat() {
        $query = "
SELECT * from matiere" ;
         $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
     public function getMatF($id) {
        $query = "SELECT matiere.* from matiere,module where module.idMod=matiere.idmodule and  module.filiere=?" ;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function getFilnj($id,$f) {
        $query = "select nom,prenom,count(*) as nbreAbs from etudiant,absence where etudiant.cne=absence.cne and ETAT='non justifie' and idFillere=? GROUP by absence.CNE having nbreAbs >?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id,$f));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function getHeureTabs($et,$id) {
        $query = "SELECT * FROM ( select nom,prenom,email,count(*) as nbreAbs ,idFillere from etudiant,absence where etudiant.idetudiant=absence.CNE and ETAT=? GROUP by absence.CNE union select nom,prenom,email,count(*)=0 as nbreAbs,idFillere from etudiant where idetudiant not in (select CNE from absence ) GROUP by idetudiant ) A WHERE idFillere=? ORDER BY nom";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($et,$id));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function getInf($nm) {
        $query = "select * from etudiant where nom=?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($nm));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function getEmp($us,$jr) {
        $query = "select type,filiere.abreveation,emploiprof.idFil,emploiprof.id,emploiprof.idGroupe, matiere.libelle,emploiprof.H_debut,emploiprof.H_fin,filiere.abreveation,jour from etudiant,emploiprof,professeur,filiere,matiere where emploiprof.idProf=professeur.id and emploiprof.idMat=matiere.idMatiere and filiere.idFillere=emploiprof.idFil and etudiant.idFillere=filiere.idFillere and professeur.nom=? and jour=? group by emploiprof.H_debut ";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($us,$jr));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
        public function getEtf($us,$gr) {
        $query = "

select etudiant.*,filiere.abreveation,groupe.num from etudiant,filiere,groupe where etudiant.idFillere=filiere.idFillere and etudiant.idgrp=groupe.id and etudiant.idFillere=? and etudiant.idgrp=?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($us,$gr));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
     public function getEtp($us,$gr,$nm) {
        $query = '

select etudiant.*,filiere.abreveation,groupe.num from etudiant,filiere,groupe where etudiant.idFillere=filiere.idFillere and etudiant.idgrp=groupe.id and etudiant.idFillere=? and etudiant.idgrp=? and etudiant.nom like ?"%" ';
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($us,$gr,$nm));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
public function getFilPr($nom) {
        $query = "Select filiere.abreveation,filiere.idFillere from emploiprof,filiere,professeur where emploiprof.idProf=professeur.id and filiere.idFillere=emploiprof.idFil and professeur.nom=? group by filiere.idFillere";

         $req = $this->connexion->getConnexion()->prepare($query);
         $req->execute(array($nom));
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
   public function getGrp($us) {
        $query = "select groupe.* from groupe,filiere where filiere.idFillere=groupe.idFil and groupe.idFil=?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($us));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function getLib($us,$us1,$us2) {
        $query = "select etudiant.nom,etudiant.prenom,etudiant.idetudiant,etudiant.email ,count(*) as nbre,filiere.abreveation  from absence,etudiant,filiere where absence.CNE=etudiant.idetudiant and filiere.idFillere=etudiant.idFillere and filiere.idFillere=? and absence.ETAT='non justifie' group by etudiant.idetudiant having nbre >=? and nbre <?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($us,$us1,$us2));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
    public function findById1($id, $annee) {
        
    }

}