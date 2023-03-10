<?php

require_once('./Class/Connexion.php');
$connexion = new Connexion();
// var_dump(Connexion);
// TODO Faire une classe pour le PDO.

// var_dump($connexion);

$sql = 'SELECT * FROM warrior';
// 1)
// $resp = $bdd->query($sql);

// 2) prepare req, anfd exec (use binValie)
$req = $bdd->prepare('SELECT * FROM warrior WHERE name= :name');
// $req->execute(array('name'=>$_GET['name']));
$req->bindValue(':name', $_GET['name'], PDO::PARAM_STR);
$req->execute();
$data = $req->fetch();

$req->closeCursor();
// while ($warrior = $req->fetch()) {
// var_dump($test);
// }
// foreach ($resp as $warriors => $name) {
//     var_dump($name);
// }
