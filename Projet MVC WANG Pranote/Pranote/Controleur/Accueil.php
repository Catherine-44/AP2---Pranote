<?php

include_once "./modele/dao.authentification.inc.php";
include "./Vue/boot.html.php";
if (daoautentification::isLoggedOn()){
     include "./vue/vueAccueil.php";
     }
 else {
     include "./vue/vueConnexion.php";
 }

?>