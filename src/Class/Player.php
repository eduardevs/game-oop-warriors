<?php

class Player
{
    private int $life;
    private int $strength;
    private int $defense;
    // private $energy;
    private string $name;

    public const LIFE = 100;
    public const ENERGY = 100;



    public function __construct(int $life, int $strength, int $defense, string $name)
    {
        $this->life = $life;
        $this->strength = $strength;

        $this->defense = $defense;

        $this->name = $name;

        // $this->setLife($life);
        // $this->setAttack($attack);
        // $this->setdefense($defense);
        // $this->setName($name);
    }

    // getter accessor
    public function getLife(): int
    {
        return $this->life;
    }

    public function getStrength(): int
    {
        return $this->strength;
    }


    public function getDefense(): int
    {
        return $this->defense;
    }

    public function getName(): string
    {
        return $this->name;
    }


    // public function getEnergy()
    // {
    //     return $this->energy;
    // }


    // setter mutator

    public function setStrength($strength): void
    {
        $this->strength = $strength;
    }

    public function setDefense($defense): void
    {
        $this->defense = $defense;
    }

    public function setLife($life): void
    {
        $this->life = $life;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }


    // public function setEnergy($energy)
    // {
    //     $this->energy = $energy;
    // }
    // features
    public function attack($enemy)
    {
        if ($enemy->defense > 5 && $this->strength > 15) {
            $enemy->setLife($enemy->getLife() - 5);
        } elseif ($enemy->defense < 5 && $this->strength > 15) {
            $enemy->setLife($enemy->getLife() - 10);
        } else {
            $enemy->setLife($enemy->getLife() - 3);
        }


        // var_dump($enemy);
        // die();
        // return $degats;
        //
    }
    public function displayLife(): string
    {
        return $this->getName().', you have '.$this->getLife(). ' points of life !';
    }
}
