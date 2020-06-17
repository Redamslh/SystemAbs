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
include_once "beans/Utulisateur.php";
include_once "connexion/Connexion1.php";
include_once "dao/IDao.php";
class UtilisateurService implements IDao{
   private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }
      public function findById1($id,$annee){
        
    }
    public function create($o){
        $query="insert into utilisateur values (?,?,?,?,?,?,?,?)";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getLogin(),$o->getNom(),$o->getPassword(),$o->getPrenom(),$o->getRole(),$o->getIdutulisateur(),$o->getTelephone(),$o->getEmail())) or die;
    }
    public function delete($id){
        $query="delete from utilisateur where idutulisateur=?";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die;
    }
    public function update($o){
        $query="update utilisateur set login=? ,nom=?,prenom=?,role=?,telephone=?,Email=?,password=? where idutulisateur=?";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getLogin(),$o->getNom(),$o->getPrenom(),$o->getRole(),$o->getTelephone(),$o->getEmail(),$o->getPassword(),$o->getIdutulisateur())) or die;
    }
    public function findAll(){
        $query="select * from utilisateur";
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
}