<?php

class Pokemon{

    private $nom;
    private $pv;
    private $pvmax;
    private $pc;
    private $type;

    
    public function __construct($nom, $pv , $pc , $type){
        $this->nom = $nom;
        $this->pv = $pv;
        $this->pvmax = $pv;
        $this->pc = $pc;
        $this->type = $type;

    }
    
    public function getNom(){
        return $this->nom;
    }

    public function getPv(){
        return $this->pv;
    }

    public function getPvMax(){
        return $this->pvmax;
    }

    public function getPc(){
        return $this->pc;
    }

    public function getType(){
        return $this->type;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setPv($Pv){
        $this->pv = $Pv;
    }

    public function setPvMax($pvmax){
        $this->pvmax = $pvmax;
    }

    public function setPc($pc){
        $this->pc = $pc;
    }

    public function setType($type){
        $this->type = $type;
    }



    // fonction general
    public function estVivant(){
        if($this->pv <= 0){
            return TRUE;
        }else{
          return FALSE;
        }
        
    }

    public function BoitPotion(){
        if($this->pv <=2){
            $this->pv += 2;
            echo "Vous recupérer : " . $this->pv . " pv ";
        }
    }

    public function attaque($pokemon){
        echo "<br>";
        echo $this->nom . " attaque " . $pokemon->getNom();
        echo "<br>";
        $pokemon->subPv($this->pc);
        echo "<br><br>";
    }

    public function addPv(){
        
    }

    public function subPv($degat){
        $this->pv -= $degat;
        echo "Il subit " . $degat . " dégats ";
        echo "<br>";
        echo "il lui reste " . $this->pv . " pv";

    }

}