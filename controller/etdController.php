<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

chdir('..');
include_once 'service/FilereService.php';
extract($_POST);

$ds = new FilereService();
header('Content-type: application/json');
echo json_encode($ds->getHeureTabs($et,$id));