<?php

require_once('./Class/Connexion.php');
require('./Class/Player.php');
require('./manager/PlayerManager.php');

if (isset($_GET['todo'])) {
    $action = $_GET['todo'];
} elseif (isset($_POST['todo'])) {
    $action = $_POST['todo'];
}

switch($action) {
    case 'all':
        getPlayers();
        break;
    case 'add':
        addPlayer();
        break;
}

function getPlayers()
{
    session_start();

    $db = new Connexion();
    $connexion = $db->getConnexion();
    $playerManager = new PlayerManager($connexion);
    // var_dump($playerManager->getDb());
    // die();
    $players = $playerManager->fetchAll();

    // TODO : How to return this data to the template ????
    // INSTEAD OF RENDERING DATA IN TEMPLATE WE ARE INCLUDING

    include('./players2.php');
}

function addPlayer()
{
    session_start();
    $user = $_POST['username'];
    $password = $_POST['password'];
    // Instance Pdo connexion
    $db = new Connexion();
    $connexion = $db->getConnexion();
    // make prepared request
    $sql = 'INSERT INTO warrior (name, password) VALUES ( :name, :password)';
    $data = ['name' => $user, 'password' => $password];
    $req = $connexion->prepare($sql)->execute($data);
    // var_dump($req);
    // $req->bindValue(':name', $user);
    // $req->bindValue(':password', $password);
    // execute
    // $connexion->closeCursor();
    $_SESSION['success'] = 'Player '.ucfirst($user). ' was created !';
    header('location:./createplayer.php');
}


// TODO : Make module search
/**
 * $db = new Connexion();
* $connexion = $db->getConnexion();
* $sql = "SELECT * FROM warrior WHERE name='Edward'";
* $req = $connexion->query($sql);
 */
