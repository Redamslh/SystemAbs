<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Etudiant
 *
 * @author achraf bouirik
 */
class Etudiant {

    public $idetudiant;
    public $nom;
    public $prenom;
    public $idFiliere;
   
    public $tel;
    public $telP;
    public $img;
    public $niveau;
public $Nai;
public $email;
public $Grp;

    function __construct( $idFiliere,$idetudiant, $nom, $prenom, $tel, $telP,$niveau,$Nai,$email,$img,$Grp) {
        $this->prenom = $prenom;
        $this->idetudiant = $idetudiant;
        $this->nom = $nom;
        $this->idFiliere = $idFiliere;
     $this->Grp = $Grp;
        $this->tel = $tel;
        $this->telP = $telP;
       $this->img = $img;
       $this->Nai = $Nai;
        $this->niveau = $niveau;
        $this->email = $email;
    }



    public function getPrenom() {
        return $this->prenom;
    }

    public function getIdetudiant() {
        return $this->idetudiant;
    }

    public function getNom() {
        return $this->nom;
    }
 function getGrp() {
        return $this->Grp;
    }
     function getEmail() {
        return $this->email;
    }
    public function getIdfiliere() {
        return $this->idFiliere;
    }

 
    public function getTel() {
        return $this->tel;
    }
     public function getImg() {
        return $this->img;
    }
     public function getDate() {
        return $this->Nai;
    }

    public function getTelP() {
        return $this->telP;
    }


    public function getNiveau() {
        return $this->niveau;
    }

    public function setIdetudiant($idetudiant) {
        $this->idetudiant = $idetudiant;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setIdFiliere($idFiliere) {
        $this->idFiliere = $idFiliere;
    }


    public function setTel($tel) {
        $this->tel = $tel;
    }

    public function setTelP($telP) {
        $this->telP = $telP;
    }

 

    

}
