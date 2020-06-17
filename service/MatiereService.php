<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MatiereService
 *
 * @author achraf bouirik
 */
include 'connexion/Connexion1.php';
include_once 'dao/IDao.php';
include_once 'beans/Matiere.php';


class MatiereService implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }

    public function create($o) {
        $query="insert into matiere values (NULL,NULL,?,NULL)";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($$o->getlibelle())) or die;
    }

    public function update($id) {
        
    }

    public function findAll() {
        $query = "select * from matiere";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

    public function findById($id) {
        
    }
      public function findById1($id,$annee) {
        
    }

    public function delete($id) {
        $query="delete from matiere where id=?";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die;
        
    }

}
