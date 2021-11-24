<?php

include_once "bd.inc.php";
include_once "dao.authentification.inc.php";

class daoeleve{

    public static function getEleve(){
        $resultat = array();

        try {
            $cnx = connexionpdo::connexionPDO();
            $req = $cnx->prepare("select * from eleve");
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
    
    public static function getElevesByMailU($email) {

        try {
            $cnx = connexionpdo::connexionPDO();
            $req = $cnx->prepare("select * from eleve where email=:email");
            $req->bindValue(':email', $email, PDO::PARAM_STR);
            $req->execute();
            
            $resultat = $req->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function getElevesBynomU($NomEleve) {

        try {
            $cnx = connexionpdo::connexionPDO();
            $req = $cnx->prepare("select * from eleve where NomEleve=:NomEleve");
            $req->bindValue(':NomEleve', $NomEleve, PDO::PARAM_STR);
            $req->execute();
            
            $resultat = $req->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function createEleve($INE, $NomEleve, $PrenomEleve, $email, $mdp){
        //$resultat=false;
        try {
            $cnx = connexionpdo::connexionPDO();
            $req = $cnx->prepare("insert into eleve (INE, NomEleve, PrenomEleve, email, mdp) values (:INE, :NomEleve, :PrenomEleve, :email, :mdp)");
            $req->bindValue(':INE', $INE, PDO::PARAM_STR);
            $req->bindValue(':NomEleve', $NomEleve, PDO::PARAM_STR);
            $req->bindValue(':PrenomEleve', $PrenomEleve, PDO::PARAM_STR);
            $req->bindValue(':email', $email, PDO::PARAM_STR);
            $req->bindValue(':mdp', $mdp, PDO::PARAM_STR);
            $req->execute();

            $resultat=true;
        }   

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            $resultat=false;
            //die();
        }
        return $resultat;
    }

    public static function Modmdp($nom, $mdp) {

        try {
            $cnx = connexionpdo::connexionPDO();
            $req = $cnx->prepare("update eleve set mdp=:mdp where NomEleve=:NomEleve");
            $req->bindValue(':mdp', $mdp, PDO::PARAM_STR);
            $req->bindValue(':NomEleve', $nom, PDO::PARAM_STR);
            $resultat=$req->execute();
            
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return 1;
    }

    public static function DeleteEleve($email){
        $resultat = -1;

        try {
            $cnx = connexionpdo::connexionPDO();
            $req = $cnx->prepare("delete from eleve where email=:email");
            $req->bindValue(':email' , $email, PDO::PARAM_STR);
            $req->execute();

        } 
            catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage();
                die();
            }
            return $resultat;
        }
}
?>