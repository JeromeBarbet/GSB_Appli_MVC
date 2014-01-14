<?php
include("vues/v_sommaire.php");

/* 
 * Controleur pour l'UC validerFrais
 * 
 * @author jbarbet
 */

$action = $_REQUEST['action'];
switch ($action) {
    case 'selectionnerVisiteurEtMois':
        $lesVisiteurs = $pdo->getLesVisiteurs();
        $lesMois = $pdo->getLesMois();
        include("vues/v_selectionVisiteurEtMois.php");
        break;
    
    case 'afficherFrais':
        $lesVisiteurs = $pdo->getLesVisiteurs();
        $lesMois = $pdo->getLesMois();
        
        $leVisiteurSelectionne['id'] = $_REQUEST['lstVisiteurs'];
        $leMoisSelectionne['mois'] = $_REQUEST['lstMois'];
        // Vérification de l'existence d'une fiche
        // if ($pdo->estPremierFraisMois($leVisiteurSelectionne['id'], $leMoisSelectionne['mois'])){
        //    ajouterErreur("Pas de fiche de frais pour ce visiteur ce mois.");
        //    include(v_erreurs.php);
        //} else {
            // Récupération d'infos sur le visiteur
            $infosVisiteur = $pdo->getInfosDuVisiteur($leVisiteurSelectionne['id']);
            $leVisiteurSelectionne['nom'] = $infosVisiteur['nom'];
            $leVisiteurSelectionne['prenom'] = $infosVisiteur['prenom'];
            // Récupération des frais pour le mois
            $lesFraisForfaitises = $pdo->getLesFraisForfait($leVisiteurSelectionne['id'], $leMoisSelectionne['mois']);
            $lesFraisNonForfaitises = $pdo->getLesFraisHorsForfait($leVisiteurSelectionne['id'], $leMoisSelectionne['mois']);
            
            include("vues/v_selectionVisiteurEtMois.php");
            include("vues/v_detailFrais.php");            
        //}
        break;
        
    case 'actualiserFraisForfait':
        break;
    
    case 'supprimerLigneFraisHorsForfait':
        break;
    
    case 'validerFicheFrais':
        break;

    default:
        break;
}