<?php

class cours{
    private $NumCours;
    private $NomCours;
    private $NUMEN;
    private $DateCours;
    private $HeureCours;

    public function __construct($unNumcours, $unNomCours, $unNUMEN, $uneDateCours, $uneHeureCours){
        $this->NumCours=$unNumcours;
        $this->NomCours=$unNomCours;
        $this->NUMEN=$unNUMEN;
        $this->DateCours=$uneDateCours;
        $this->HeureCours=$uneHeureCours;
    }

    public function getNomCours(){
        return $this->NomCours;
    }

    public function getDateCours(){
        return $this->DateCours;
    }

    public function getHeureCours(){
        return $this->HeureCours;
    }
}