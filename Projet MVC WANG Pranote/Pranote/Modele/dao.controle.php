<?php

include_once "bd.inc.php";
include_once "controle.php";

class daocontrole{

    public static function CreateControle(){
        try {
            $cnx = connexionpdo::connexionPDO();
            $req = $cnx->prepare("select * from devoir");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new Controle($ligne['NumDevoir'], $ligne['DateDevoir'], $ligne['DureeDevoir'], $ligne['NUMEN']);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

}