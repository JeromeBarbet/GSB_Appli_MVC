<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<fieldset>
    <legend>Selection du visiteur et du mois</legend>
    <select name="lstVisiteurs">
        <?php
            foreach ($lesIdVisiteurs as $unIdVisiteur){
                $infos = $pdo->getInfosDuVisiteur($unIdVisiteur);
        ?>
    <option id="lstVisiteurs" name="lstVisiteurs[<?php echo $unIdVisiteur ?>]">
        <?php
            echo $infos['nom'] . ' ' . $infos['prenom'];
        ?>
    </option>
        <?php
            }
        ?>
    </select>
    <select name="lstMois">
        <?php
            foreach ($lesMois as $unMois){
        ?>
    <option id="lstMois" name="lstMois[<?php echo $unMois ?>]">
        <?php
            echo $unMois;
        ?>
    </option>
        <?php
            }
        ?>
    </select>
</fieldset>