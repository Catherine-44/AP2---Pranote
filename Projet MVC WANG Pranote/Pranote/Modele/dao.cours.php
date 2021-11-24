<?php

include_once 'Cours.php';
include_once 'bd.inc.php';

class daocours {

    public static function createCours(){
        try {
            $cnx = connexionpdo::connexionPDO();
            $req = $cnx->prepare("select * from cours");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new Cours($ligne['NumCours'], $ligne['NomCours'], $ligne['NUMEN'], $ligne['DateCours'], $ligne['HeureCours']);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

}