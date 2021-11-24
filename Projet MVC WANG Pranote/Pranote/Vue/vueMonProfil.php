<html>
<title> Mon porfil </title>
<meta charset="UTF-8"> 
<h1>Mon profil</h1>

Mon nom : <?= daoautentification::getnomLoggedOn() ?> <br /> 
Mon prenom : <?= daoautentification::getprenomLoggedOn() ?> <br />
Ma date de naissance : <?= daoautentification::getDateNaissLoggedOn() ?> <br />
Ma classe : <?= daoautentification::getclasseLoggedOn() ?> <br />
Mon adresse électronique : <?= daoautentification::getemailLoggedOn() ?> <br />

<br>
<br>

<div>
<a href=<?php echo "./?action=supprimer&email=".$_SESSION["email"]?>>Supprimer mon compte</a><br><br/>
<a href=<?php echo "./?action=FormMod&NomEleve=".$_SESSION["NomEleve"]?>>Modifier mon mot de passe</a><br><br/>

</div>
</html>