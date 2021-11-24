<?php
include_once './modele/dao.cours.php';
$ret = daocours::createCours();
include "./Vue/boot.html.php";
if (daoautentification::isLoggedOn()){
    include "./Vue/vueCours.php";
    }
else {
    include "./vue/vueConnexion.php";
}

