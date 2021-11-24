<?php

include_once "./Modele/dao.eleve.php";

if (isset($_GET["email"])){
	$email = $_GET["email"];
}

daoeleve::DeleteEleve($email);

if (daoeleve::DeleteEleve($email)){
	include "./Vue/boot.html.php";
	include "./Vue/vueSupprimer.php";
}else{
	print("Votre compte n'a pas été supprimé correctement.");
}
?>