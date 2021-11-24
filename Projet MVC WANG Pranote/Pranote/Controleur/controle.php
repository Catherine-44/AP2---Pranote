<?php 
include_once "./modele/dao.controle.php";
$ret = daocontrole::CreateControle();
include "./Vue/boot.html.php";
if (daoautentification::isLoggedOn()){
    include "./vue/vueControle.php";
    }
else {
    include "./vue/vueConnexion.php";
}


?>