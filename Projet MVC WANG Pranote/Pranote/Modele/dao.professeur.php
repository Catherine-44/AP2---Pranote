<?php

include_once "bd.inc.php";
include_once "dao.authentification.inc.php";

class daoprofesseur{

    public static function createProf(){
        $resultat = array();

        try {
            $cnx = connexionpdo::connexionPDO();
            $req = $cnx->prepare("select * from professeur");
            $req->execute();

            $ligne =$req->fetch(PDO::FETCH_ASSOC);
            while($ligne) {
                $resultat[]= $ligne;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } 
            catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage();
                die();
            }
            return $resultat;
        }

        public static function getProfesseur() {

            try {
                $cnx = connexionpdo::connexionPDO();
                $req = $cnx->prepare("select * from professeur");
                $req->execute();
        
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
                while ($ligne) {
                    $resultat[] = $ligne;
                    $ligne = $req->fetch(PDO::FETCH_ASSOC);
                }
            } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage();
                die();
            }
            return $resultat;
        }

        public static function getprofesseurByMailU($emailP) {

            try {
                $cnx = connexionpdo::connexionPDO();
                $req = $cnx->prepare("select * from professeur where emailP=:emailP");
                $req->bindValue(':emailP', $emailP, PDO::PARAM_STR);
                $req->execute();
                
                $resultat = $req->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage();
                die();
            }
            return $resultat;
        }

        public static function getprofesseurBynomP($NomProf) {

            try {
                $cnx = connexionpdo::connexionPDO();
                $req = $cnx->prepare("select * from professeur where NomProf=:NomProf");
                $req->bindValue(':NomProf', $NomProf, PDO::PARAM_STR);
                $req->execute();
                
                $resultat = $req->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage();
                die();
            }
            return $resultat;
        }
}