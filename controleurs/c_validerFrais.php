<?php
include("vues/v_sommaire.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$action = $_REQUEST['action'];
switch ($action) {
    case 'selectionnerVisiteurEtMois':
        $lesIdVisiteurs = $pdo->getLesIdVisiteurs();
        $lesMois = $pdo->getLesMois();
        include("vues/v_selectionVisiteurEtMois.php");

        break;

    default:
        break;
}