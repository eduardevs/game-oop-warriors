<?php

class Connexion
{
    private $host = 'db';
    private $user = 'root';
    private $password = 'example';
    private $db = 'game_oop';
    private $connexion;

    public function __construct()
    {
        try {
            $this->$connexion = new PDO('mysql:host='.$host.';dbname='.$db, $user, $password);
            // $this->setConnexion($PDO);
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        };
    }

    public function setConnexion($connexion)
    {
        $this->connexion = $connexion;
    }
}
