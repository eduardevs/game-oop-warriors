<?php

require_once('./Class/Connexion.php');
require('./Class/Player.php');


$david = new Player(100, 20, 16, 'David');
$goliath = new Player(50, 40, 1, 'Goliath');


// echo 'david life!';
// var_dump($david->getLife());
echo '<br/>';
echo 'Goliath life';
echo $goliath->getLife();


echo '<br/>';
echo '<br/>';
echo 'David attack Goliath !';
$david->attack($goliath);
echo '<br/>';
// print_r($david);
echo '<br/>';
echo $goliath->displayLife();
die();





if (isset($_GET['todo'])) {
    $action = $_GET['todo'];
} elseif (isset($_POST['todo'])) {
    $action = $_POST['todo'];
}

switch($action) {
    case 'players':
        getPlayers();
        break;
    case 'add':
        addPlayer();
        break;
}

function getPlayers()
{
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

function addPlayer()
{
    // echo'hello';
    session_start();
    $user = $_POST['username'];
    $password = $_POST['password'];
    // Instance Pdo connexion
    $db = new Connexion();
    $connexion = $db->getConnexion();
    // make prepared request
    $sql = 'INSERT INTO warrior (name, password) VALUES ( :name, :password)';
    $data = ['name' => $user, 'password' => $password];
    $connexion->prepare($sql)->execute($data);
    // $req->bindValue(':name', $user);
    // $req->bindValue(':password', $password);
    // execute
    $req->closeCursor();
    $_SESSION['success'] = 'Player '.ucfirst($user). ' was created !';
    header('location:./createplayer.php');
}
