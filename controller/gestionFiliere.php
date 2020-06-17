<?php

chdir('..');
include_once 'service/FilereService.php';
extract($_POST);

$ds = new FilereService();
if (isset($op) && $op != '') {
    if ($op == 'add') {
        $ds->create(new Filiere($idfiliere, $nomfiliere,$abreviation));
    } elseif ($op == 'update') {
        $ds->update(new Filiere($idfiliere, $nomfiliere,$abreviation));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
    elseif ($op == 'nb') {
        header('Content-type: application/json');
echo json_encode($ds->getAbF());
    }
    elseif ($op == 'nbe') {
        header('Content-type: application/json');
echo json_encode($ds->getAbE());
    }
    elseif ($op == 'nbm') {
        header('Content-type: application/json');
echo json_encode($ds->getAbM());
    }
    elseif ($op == 'nbt') {
        header('Content-type: application/json');
echo json_encode($ds->getNet());
    }
    elseif ($op == 'nbj') {
        header('Content-type: application/json');
echo json_encode($ds->getNj());
    }
    elseif ($op == 'nbnj') {
        header('Content-type: application/json');
echo json_encode($ds->getNnj());
    }
    elseif ($op == 'Ms') {
        header('Content-type: application/json');
echo json_encode($ds->getMost());
    }
    elseif ($op == 'Pr') {
        header('Content-type: application/json');
echo json_encode($ds->getPro());
    }
    elseif ($op == 'Fl') {
        header('Content-type: application/json');
echo json_encode($ds->getFilnj($id,$f));
    }
    elseif ($op == 'inf') {
        header('Content-type: application/json');
echo json_encode($ds->getInf($nm));
    }
    elseif ($op == 'Emp') {
        header('Content-type: application/json');
echo json_encode($ds->getEmp($us,$jr));
    }
    elseif ($op == 'Fpr') {
        header('Content-type: application/json');
echo json_encode($ds->getFilPr($nom));
    }
    elseif ($op == 'Npr') {
        header('Content-type: application/json');
echo json_encode($ds->getNpr());
    }
    elseif ($op == 'Etf') {
        header('Content-type: application/json');
echo json_encode($ds->getEtf($et,$gr));
    }
    elseif ($op == 'Gr') {
        header('Content-type: application/json');
echo json_encode($ds->getGrp($gr));
    }
    elseif ($op == 'nm') {
        header('Content-type: application/json');
echo json_encode($ds->getEtp($et,$gr,$nm));
    }
    elseif ($op == 'prof') {
        header('Content-type: application/json');
echo json_encode($ds->getPr());
    }
    elseif ($op == 'ma') {
        header('Content-type: application/json');
echo json_encode($ds->getmat());
    }
    elseif ($op == 'gr') {
        header('Content-type: application/json');
echo json_encode($ds->getGr());
    }
    elseif ($op == 'md') {
        header('Content-type: application/json');
echo json_encode($ds->getMd());
    }
     elseif ($op == 'lb') {
        header('Content-type: application/json');
echo json_encode($ds->getLib($us,$us1,$us2));
    }
    elseif ($op == 'mat') {
        header('Content-type: application/json');
echo json_encode($ds->getMatF($us));
    }
}else{
    header('Content-type: application/json');
echo json_encode($ds->findAll());
}