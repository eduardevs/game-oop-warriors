<?php

// require_once('../Class/Player.php');

class PlayerManager
{
    // 1. Le manager a besoin seulement d'une connexion pour fonctionner
    private $db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $pdo)
    {
        $this->db = $pdo;
    }

    public function add(Player $player)
    {
        // Ajout a la db
    }

    public function fetchAll()
    {
        // récuere tout les players
        $sql = 'SELECT * FROM warrior';

        // make normal query
        $query = $this->db->query($sql);
        // setFetchMode
        $query->setFetchMode(PDO::FETCH_CLASS, 'Warrior');
        $players = $query->fetchAll();
        $query->closeCursor();

        return $players;
        // var_dump($players);
        // $players =
    }
}
