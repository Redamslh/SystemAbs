<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GroupeService
 *
 * @author achraf bouirik
 */
include_once "beans/Groupe.php";
include_once "connexion/Connexion1.php";
include_once "dao/IDao.php";
class GroupeService implements IDao{
    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }
    public function create($o){
        $query="insert into groupe values (NULL,?,?,?,?,?)";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNum(),$o->getSalle(),$o->getIdmatiere(),$o->getAnnee(),$o->getFil())) or die;
    }
    public function delete($id){
        $query="delete from groupe where id=?";
        $req=$this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die;
    }
    public function update($o){
        $query="update groupe set num=?,salle=?,idmatiere=?,annee=? where id=?";
        $req=$this->connexion->getConnexion()->prepare($query);
         $req->execute(array($o->getNum(),$o->getSalle(),$o->getIdmatiere(),$o->getAnnee(),$o->getId())) or die;
    }
    public function findAll(){
       
        $query="
SELECT groupe.id,groupe.salle,groupe.num,filiere.abreveation from groupe,filiere where groupe.idFil=filiere.idFillere ";
        $req = $this->connexion->getConnexion()->query($query);
        $f = $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    
    }
      public function findById($id){
        
    }
    public function findById1($id,$annee){
        $query = "select groupe.num,groupe.salle,groupe.id ,groupe.annee,matiere.libelle,matiere.prof,matiere.typeMatiere from groupe ,matiere,filiere,module where groupe.idmatiere=matiere.idMatiere and filiere.idFillere=module.idfiliere and matiere.idmodule=module.idMod and filiere.idFillere=? and groupe.annee=?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id,$annee));
        $res = $req->fetchAll(PDO::FETCH_OBJ);
        return $res;
    }
}
