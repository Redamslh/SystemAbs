<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Connexion {
    private $connexion;

    public function __construct() {
        $host = 'sql7.freemysqlhosting.net';
        $dbname = 'sql7348907';
        $login = 'sql7348907';
        $password = '2fBgRCQekb';
        try {
            $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
            $this->connexion->query("SET NAMES UTF8");
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    function getConnexion() {
        return $this->connexion;
    }
}

