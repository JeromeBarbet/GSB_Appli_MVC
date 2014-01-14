<?php

/* 
 * Affichage et modification des frais forfaitises pour un visiteur et un mois selectionne
 * 
 * @author jbarbet
 */
?>
<form method="POST" action="index.php?uc=validerFrais&action=validerFraisForfait">
    <fieldset><legend>Frais forfaitisés de
        <?php
            echo ' ' . $leVisiteurSelectionne['nom'] . ' '
                    . $leVisiteurSelectionne['prenom'] .' pour le mois '
                    . formatMois($leMoisSelectionne['mois']);
        ?>
        </legend>
        <?php
            if (isset($lesFraisForfaitises)){
                var_dump($lesFraisForfaitises);
            }
            if (isset($lesFraisNonForfaitises)){
                var_dump($lesFraisNonForfaitises);
            }
        ?>
    </fieldset>
</form>