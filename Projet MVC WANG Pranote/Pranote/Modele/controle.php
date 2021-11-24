<?php

class controle{

    private $NumDevoir;
    private $DateDevoir;
    private $DureeDevoir;
    private $NUMEN;

    public function __construct($unNumDevoir, $uneDateDevoir, $uneDureeDevoir, $unNUMEN){
        $this->NumDevoir=$unNumDevoir;
        $this->DateDevoir=$uneDateDevoir;
        $this->DureeDevoir=$uneDureeDevoir;
        $this->NUMEN=$unNUMEN;

    }

    public function getNumDevoir(){
        return $this->NumDevoir;
    }

    public function getDateDevoir(){
        return $this->DateDevoir;
    }

    public function getDureeDevoir(){
        return $this->DureeDevoir;
    }
}