<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

include_once 'beans/Utilisateur.php';
include_once 'connexion/connexion.php';
include_once 'dao/IDao.php';

class UserService implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }
    public function update($o) {
        $query = "UPDATE utilisateur set Email=?,password=? where login=?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getEmail(),$o->getPswd(),$o->getLg())) or die('Error');
    }
    public function findAll(){
        $query="select * from Utilisateur";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }

    public function create($o) {
        
    }

    public function delete($o) {
        
    }

    public function findById($id) {
        
    }

    public function getAbF() {
        
    }

    public function getHeureAbs($id) {
        
    }

    public function getHeureAbs2($id) {
        
    }

    public function findById1($id, $annee) {
        
    }

}


