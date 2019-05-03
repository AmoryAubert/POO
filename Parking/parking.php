<?php

class voiture{
    public $libre;
    public $origine;
    public $etat;
    public $age;

    public function __construct($immatriculation,$dateCirculation,$kilometre,$marque,$modele,$couleur,$poids){
        $this->immatriculation = $immatriculation;
        $this->dateCirculation = $dateCirculation;
        $this->kilometre = $kilometre;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        $this->poids = $poids;
        $this->marque =="audi" ? $this->libre = "réservée" : $this->libre = "libre";
        switch(substr($this->immatriculation,0,2)){
            case "BE": $this->origine = "Belgique"; break;
            case "DE": $this->origine = "Allemagne"; break;
            case "FR": $this->origine = "France"; break;
            case "IT": $this->origine = "Italie"; break;
            default : $this->origine = "Inconnue";
        }
    }

    public function display(){
        if ($this->kilometre < 100000){
            $this->etat = "peu servi";
        } else if ($this->kilometre < 200000 && $this->kilometre > 100000){
            $this->etat = "moyennement servi";
        } else {
            $this->etat = "beaucoup servi";
        }
        return "<div class='car'>
                    <div class='car-desc'>
                        <p>".ucfirst($this->marque)." ".ucfirst($this->modele)."</p>
                        <p>Date de mise en circulation: ".$this->dateCirculation."</p>
                        <p>Immatriculation: ".$this->immatriculation."</p>
                        <p>Kilomètres: ".$this->kilometre." Km</p>
                        <p>Origine: ".$this->origine."</p>
                        <p>Couleur: ".$this->couleur."</p>
                        <p>Poids: ".$this->poids." Kg</p>
                        <p>Status: ".$this->libre."</p>
                        <p>Etat: ".$this->etat."</p>
                    </div>
                    <img 
                        src='assets/img/".$this->marque."-".str_replace(" ","-",$this->modele).".jpg' 
                        alt='".$this->marque." ".$this->modele."'
                        class='car-img'
                    >
                </div>"; // width='440'
    }

    public function roule(){
        $this->kilometre += 100000;
        $this->etat = $this->etat;
    }
}