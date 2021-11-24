<?php

function controleurPrincipal($action) {
    $lesActions = array();
    
    $lesActions["defaut"] = "connexion.php";
    $lesActions["accueil"] = "Accueil.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["Cours"] = "Cours.php";
    $lesActions["Controle"] = "controle.php";
    $lesActions["Inscription"] = "inscription.php";
    $lesActions["FormInsc"] = "FormInsc.php";
    $lesActions["Modmdp"] = "modification.php";
    $lesActions["FormMod"] = "FormMod.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["supprimer"] = "supprimer.php";
    $lesActions["profil"] = "MonProfil.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    }
    else {
        return $lesActions["defaut"];
    }
}
?>