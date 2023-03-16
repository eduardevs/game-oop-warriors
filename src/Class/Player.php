<?php

class Player
{
    private int $life;
    private int $strength;
    private int $defense;
    private string $password;
    private string $name;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (is_callable([$this, $method])) {
                $this->$method($value);
            }
        }
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
    public function getId(): int
    {
        return $this->int;
    }

    // setter mutators
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
    public function setId($id): void
    {
        $this->id = $id;
    }




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
