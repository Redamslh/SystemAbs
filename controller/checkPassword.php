<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

chdir('..');
include_once 'service/UserService.php';
extract($_POST);
$ds = new UserService();

if (isset($op) && $op != '') {
     if ($op == 'edit') {
        $ds->update(new Utlisateur($login,$email, $password));
    } 
 elseif ($op == 'delete') {
        $ds->delete($idabsence);
    }
}
