<?php

include_once "./Modele/dao.authentification.inc.php";
include_once "./Modele/dao.eleve.php"; 

$NomEleve = $_GET["NomEleve"];
if (isset($_GET["NomEleve"]) && isset($_POST["mdp"])) {
    $mdp = $_POST["mdp"];
    $ret = daoeleve::Modmdp($NomEleve, $mdp);
}

include "./Vue/boot.html.php";
if ($ret!=NULL){
    $util=daoeleve::getElevesBynomU($NomEleve);

    daoautentification::login($util["email"], $mdp);
    include "./Vue/vueMonProfil.php";
}else{
    include "./Vue/vueModmdp.php";
}