<?php

chdir('..');
include_once 'service/MatiereService.php';
extract($_POST);

$ds = new MatiereService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Matiere($idmatiere, $idmodule, $libelle,$typematiere));
    } elseif ($op == 'update') {
        $ds->update(new Matiere($idmatiere, $idmodule, $libelle, $typematiere));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
