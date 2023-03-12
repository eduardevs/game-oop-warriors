<?php
    require('./dispatcher.php');
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game OOP</title>
    <?php include('./inc/include_style.php'); ?>
    
</head>
<body>
      
<?php include('./inc/header.php') ?>
    <table>
        <theader>
            <th>id</th>
            <th>name</th>
        </theader>

<tbody>
    <?php

            $sql = 'SELECT * FROM warrior';
    // Instance Pdo connexion
    $db = new Connexion();
    $connexion = $db->getConnexion();
    // make normal query
    $req = $connexion->query($sql);

    // $data =$req->fetch();

    // foreach ($data as $req->fetch()) {
    // }
    while ($data = $req->fetch()) {
        echo('<tr><td>'.$data['id'].'</td><td>'.$data['name'].'</td></h2>');
    }
    $req->closeCursor();
    ?>
    
    </tbody>
    </table>
    <a class="btn btn-dark" href="./index.php">Return</a>
   
</body>
</html>