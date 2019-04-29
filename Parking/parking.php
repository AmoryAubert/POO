<?php

class voiture{
    public function __construct($immatriculation,$dateCirculation,$kilometre,$marque,$modele,$couleur,$poids){
        $this->immatriculation = $immatriculation;
        $this->dateCirculation = $dateCirculation;
        $this->kilometre = $kilometre;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        $this->poids = $poids;
    }
    public function display(){
        return $this->modele;
    }
}