<?php

chdir('..');
include_once 'service/AbsenceService.php';
extract($_POST);

$ds = new AbsenceService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Absence($cne, $idmatiere, $date, $etat, $heuredebut, $heurefin, null, $justifiaction));
    } elseif ($op == 'update') {
        $ds->update(new Absence($cne, $idmatiere, $date, $etat, $heuredebut, $heurefin,$idabsence, $just ));
    } elseif ($op == 'delete') {
        $ds->delete($idabsence);
    }
    elseif ($op == 'abs') {
            header('Content-type: application/json');

        echo json_encode($ds->FindByN($us));
    }
      elseif ($op == 'Just') {
            header('Content-type: application/json');

        echo json_encode($ds->FindByJ($us));
    }
}
else{
    header('Content-type: application/json');
echo json_encode($ds->findAll());

}
