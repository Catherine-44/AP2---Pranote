<?php

class Eleve{
    public $INE;
    public $NomEleve;
    public $PrenomEleve;
    public $DateNaissE;
    public $ClassEleve;
    public $email;
    public $mdp;

    public function __construct($unINE, $unNomEleve, $unPrenomEleve, $uneDateNaissE, $uneClassEleve, $unemail, $unmdp){
        $this->INE=$unINE;
        $this->NomEleve=$unNomEleve;
        $this->PrenomEleve=$unPrenomEleve;
        $this->DateNaissE=$uneDateNaissE;
        $this->ClassEleve=$uneClassEleve;
        $this->email=$unemail;
        $this->mdp=$unmdp;
    }

    public function getINE(){
        return $this->INE;
    }

    public function getNomEleve(){
        return $this->NomEleve;
    }

    public function getPrenomEleve(){
        return $this->PrenomEleve;
    }
    
    public function getDateNaiss(){
        return $this->DateNaiss;
    }

    public function getClassEleve(){
        return $this->ClassEleve;
    }

    public function getemail(){
        return $this->email;
    }
}