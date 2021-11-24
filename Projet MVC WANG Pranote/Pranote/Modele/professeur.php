<?php

class Professeur{
    public $NUMEN;
    public $NomProf;
    public $PrenomProf;
    public $DateNaissP;
    public $Diplome;
    public $Specialte;
    public $ClasseProf;

    public function __construct($unNUMEN, $unNomProf, $unPrenomProf, $uneDateNaiss, $unDiplome, $unespecialite, $uneClasseProf){
        $this->NUMEN=$unNUMEN;
        $this->NomProf=$unNomProf;
        $this->PrenomProf=$unPrenomProf;
        $this->DateNaiss=$uneDateNaiss;
        $this->Diplome=$unDiplome;
        $this->Specialite=$unespecialite;
        $this->ClasseProf=$uneClasseProf;
    }
    
    
    public function getNUMEN(){
        return $this->NUMEN;
    }

    public function getNomProf(){
        return $this->NomProf;
    }

    public function getPrenomProf(){
        return $this->PrenomProf;
    }
    
    public function getDateNaissP(){
        return $this->DateNaissP;
    }

    public function getDiplome(){
        return $this->Diplome;
    }

    public function getSpecialite(){
        return $this->Specialite;
    }

    public function getClasseProf(){
        return $this->ClasseProf;
    }
}