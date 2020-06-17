<?php

chdir('..');
include_once 'service/UtilisateurService.php';
extract($_POST);

$ds = new UtilisateurService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Utulisateur($login, $nom,$psw, $prenom, $role, $idutulisateur, $telephone, $email));
    } elseif ($op == 'update') {
        $ds->update(new Utulisateur($login, $nom,$psw, $prenom, $role, $idutulisateur, $telephone, $email));
    } elseif ($op == 'delete') {
        $ds->delete($idutulisateur);
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());

