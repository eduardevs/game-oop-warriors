<?php

class Character
{
    private $life = 100;
    private $strength = 100 ;
    private $defense = 100;
    private $energy = 100;
    private $name;

    const LIFE = 100;
    const ENERGY = 100;

    public function __constructor() {
        
    }

    // getter accessor
    public function getLife () {
        return $this->life;
    }

    public function getStrength() {
        return $this->strength;
    }

    
    public function getDefense() {
        return $this->defense;
    }

    
    public function getStrength() {
        return $this->energy;
    }


    // setter mutator
    
    public function setStrength($strength) {
        $this->strength = $strength;
    }
    
    public function setDefense($defense) {
        $this->defense = $defense;
    }

    public function setLife($life) {
        $this->life = $life;
    }

    public function setEnergy($energy) {
        $this->energy = $energy;
    }

}
