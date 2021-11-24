<?php
include_once "./modele/dao.authentification.inc.php";

$ret=false;
$msg="";
// recuperation des donnees GET, POST, et SESSION


if (isset($_POST["INE"]) && isset($_POST["NomEleve"]) && isset($_POST["PrenomEleve"]) && isset($_POST["email"]) && isset($_POST["mdp"])) {

    // if ($_POST["INE"] == "" || $_POST["NomEleve"] == "" || $_POST["PrenomEleve"] == "" || $_POST["email"] == "" || $_POST["mdp"] == "") {
    $INE = $_POST["INE"];
    $NomEleve = $_POST["NomEleve"];
    $PrenomEleve = $_POST["PrenomEleve"];
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    //}
    $ret = daoeleve::createEleve($INE, $NomEleve, $PrenomEleve, $email, $mdp);
 //else {
    //$msg="Renseigner tous les champs !";
    }

if ($ret) {
    daoautentification::login($email,$mdp);
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Inscription confirmée";
    include "./vue/boot.html.php";
    include "./vue/vueMonProfil.php";
} else {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Inscription pb";
    include "./vue/boot.html.php";
    include "./vue/vueInscription.php";
}

?>