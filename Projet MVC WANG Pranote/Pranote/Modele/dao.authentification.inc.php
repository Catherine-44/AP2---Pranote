<?php

include_once "dao.eleve.php";

Class daoautentification{
    public static function login($email, $mdp) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $util= daoeleve::getElevesByMailU($email);
        $mdpBD = $util["mdp"];
        if ($mdpBD == $mdp) {
            $_SESSION["email"] = $email;
            $_SESSION["mdp"] = $mdpBD;
            $_SESSION["NomEleve"] = $util ["NomEleve"];
            $_SESSION["PrenomEleve"] = $util ["PrenomEleve"];
            $_SESSION["DateNaiss"] = $util ["DateNaiss"];
            $_SESSION["ClassEleve"] = $util ["ClassEleve"];

        }else{
            echo 'Le email ou mot de passe est incorrect';
        }
    }

    public static function logout() {
        if (!isset($_SESSION)) {
            session_start();
        }
        unset($_SESSION["email"]);
        unset($_SESSION["mdp"]);
    }

    public static function getemailLoggedOn(){
        if (daoautentification::isLoggedOn()){
            $ret = $_SESSION["email"];
        }
        else {
            $ret = "";
        }
        return $ret;
    
    }

    public static function isLoggedOn() {
        if (!isset($_SESSION)) {
            session_start();
        }
        $ret = false;
        
        if (isset($_SESSION["email"])) {
            $util = daoeleve::getElevesByMailU($_SESSION["email"]);
            if ($util["email"] == $_SESSION["email"] && $util["mdp"] == $_SESSION["mdp"]) {
                $ret = true;
            }
        }
        return $ret;
    }
    
    public static function getnomLoggedOn(){
        if (daoautentification::isLoggedOn()){
            $ret = $_SESSION["NomEleve"];
        }
        else {
            $ret = "";
        }
        return $ret;
    
    }

    public static function getprenomLoggedOn(){
        if (daoautentification::isLoggedOn()){
            $ret = $_SESSION["PrenomEleve"];
        }
        else {
            $ret = "";
        }
        return $ret;
    
    }

    public static function getdatenaissLoggedOn(){
        if (daoautentification::isLoggedOn()){
            $ret = $_SESSION["DateNaiss"];
        }
        else {
            $ret = "";
        }
        return $ret;
    
    }

    public static function getclasseLoggedOn(){
        if (daoautentification::isLoggedOn()){
            $ret = $_SESSION["ClassEleve"];
        }
        else {
            $ret = "";
        }
        return $ret;
    
    }
}