<?php
include_once "./Modele/dao.authentification.inc.php";

if (isset($_POST["email"]) && isset($_POST["mdp"])){
    $email=$_POST["email"];
    $mdp=$_POST["mdp"];
}
else
{
    $email="";
    $mdp="";
}

if (isset($_POST["emailP"]) && isset($_POST["mdpP"])){
    $emailP=$_POST["emailP"];
    $mdpP=$_POST["mdpP"];
}
else
{
    $emailP="";
    $mdpP="";
}

if($email !=""){
    daoautentification::login($email,$mdp);
}

if (daoautentification::isLoggedOn()){
    include "./Controleur/MonProfil.php";
}else{
    include "./vue/boot.html.php";

}