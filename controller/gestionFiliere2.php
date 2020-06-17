<?php

chdir('..');
include_once 'service/FilereService2.php';
extract($_POST);

$ds = new FilereService();
$conf = true;
if ($op != '') {
    if ($op == 'add') {
        echo $ds->create(new Filiere(null, $nomfiliere, $abreviation, $idDep, 1));
        $conf = true;
    } elseif ($op == 'update') {
      echo  $ds->update(new Filiere($idfiliere, $nomfiliere, $abreviation, $idDep, 1));
        $conf = true;
    } elseif ($op == 'delete') {
        $ds->delete($id);
        $conf = true;
    } elseif ($op == 'notyet') {
        header('Content-type: application/json');
        echo json_encode($ds->findNotYet());
        $conf = false;
    }
}
if ($conf == true) {
    header('Content-type: application/json');
    echo json_encode($ds->findAll());
}