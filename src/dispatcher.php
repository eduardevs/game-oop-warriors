<?php

require_once('./Class/Connexion.php');

$action = $_GET['todo'];
switch($action) {
    case 'players' :
        getPlayers();
    break;
    case 'add' :
        addPlayer();
    break;

}

function getPlayers() {
// ! THIS DIDNT WORK, The request is in the players page directyle
    // Make the sql request
    $sql = 'SELECT * FROM warrior';
    // Instance Pdo connexion
    $db = new Connexion();
    $connexion = $db->getConnexion();
    // make normal query
    $req = $connexion->query($sql);
    // var_dump($req);die();
    // $req->execute();
    // $req->bindValue(':name', $_GET['name'], PDO::PARAM_STR);
    // $req->execute();

 
    //    while ($data = $req->fetch()) {
    //             printf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>',$data['id'],$data['name'], $data['strength'], $data['defense'], $data['energy']);}
    
    $req->closeCursor();

    // $_SESSION['players'] = $players;

}

function addPlayer() {
    
    $sql = 'SELECT * FROM warrior';
    // Instance Pdo connexion
    $db = new Connexion();
    $connexion = $db->getConnexion();
    // make prepared request
    $req = $connexion->prepare($sql);

    
    $req->closeCursor();
    header('location:createplayer.php');

}

