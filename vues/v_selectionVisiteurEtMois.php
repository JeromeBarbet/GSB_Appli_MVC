<?php

/* 
 * Formulaire de selection d'un visiteur et d'un mois dans l'UC validerFrais
 * 
 * @author jbarbet
 */

?>
<h1>Valider une fiche de frais</h1>
<form method="POST" action="index.php?uc=validerFrais&action=afficherFrais">
    <fieldset>
        <legend>Sélection du visiteur et du mois</legend>
        
        Visiteur : 
        <select name="lstVisiteurs">
            <?php
                foreach ($lesVisiteurs as $unVisiteur){
            ?>
            <option id="listeVisiteurs" value="<?php echo $unVisiteur['id'] ?>" 
                    <?php
                        if (isset($leVisiteurSelectionne['id']) && $leVisiteurSelectionne['id'] == $unVisiteur['id']){
                            echo ' selected';
                        }
                    ?>
            >
                <?php
                    echo $unVisiteur['nom'] . ' ' . $unVisiteur['prenom'];
                ?>
            </option>
            <?php
                }
            ?>
        </select><br />
        <?php if (isset($leVisiteurSelectionne)){
        var_dump($leVisiteurSelectionne);} ?>
        
        Mois : 
        <select name="lstMois">
            <?php
                foreach ($lesMois as $unMois){
            ?>
            <option id="listeMois" value="<?php echo $unMois['mois'] ?>"
                    <?php
                        if (isset($leMoisSelectionne['mois']) && $leMoisSelectionne['mois'] == $unMois['mois']){
                            echo ' selected';
                        }
                    ?>
            >
                <?php
                    echo formatMois($unMois['mois']);
                ?>
            </option>
            <?php
                }
            ?>
        </select>
        
        <input id ="ok" type="submit" value="Valider" />
    </fieldset>
</form>