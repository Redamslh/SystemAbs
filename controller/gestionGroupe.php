<?php

chdir('..');
include_once 'service/GroupeService.php';
extract($_POST);

$ds = new GroupeService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Groupe('null', $num, $salle, $idmatiere, $annee,$idFil));
    } elseif ($op == 'update') {
        $ds->update(new Groupe($id, $num, $salle, $idmatiere, $annee,$idFil));
    } elseif ($op == 'delete') {
        $ds->delete($id);
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());

