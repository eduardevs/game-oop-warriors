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
            $this->connexion = new PDO('mysql:host='.$this->host.';dbname='.$this->db, $this->user, $this->password);

        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        };
    }

    public function getConnexion() 
    {
        return $this->connexion;
    }
}