<?php

chdir('..');
include_once 'service/EtudiantService2.php';
extract($_POST);

$ds = new EtudiantService();

if ($op != '') {
    if ($op == 'add') {
        
        $ds->create(new Etudiant ($idFiliere,$idetudiant,$nom, $prenom,$tel, $telP,$niveau,$Nai,$mail,$img,$Grp));
    } elseif ($op == 'update') {
        $ds->update(new Etudiant ($idFiliere,$idetudiant,$nom, $prenom,$tel, $telP,$niveau,$Nai,$mail,$img,$Grp));
    } elseif ($op == 'delete') {
        $ds->delete($idetudiant);
    } elseif ($op == 'groupeid') {
        header('Content-type: application/json');
        echo json_encode($ds->findByGroupeId($id));
        
    }
}else{

header('Content-type: application/json');
echo json_encode($ds->findAll());
}