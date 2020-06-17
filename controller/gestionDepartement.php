<?php

chdir('..');
include_once 'service/DepartementService.php';
extract($_POST);

$ds = new DepartementService();
$conf=true;
if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Departement(null, $nomDepartement, $idchefdep, $abrev));
        $conf=true;
    } elseif ($op == 'update') {
        $ds->update(new Departement($idDep, $nomDepartement, $idchefdep, $abrev));
        $conf=true;
    } elseif ($op == 'delete') {
        $ds->delete($id);
        $conf=true;
    } elseif ($op == 'notyet') {
        header('Content-type: application/json');
        echo json_encode($ds->findNotYet());
        $conf=false;
    }
}
if($conf==true){
header('Content-type: application/json');
echo json_encode($ds->findAll());
}