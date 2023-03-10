<?php
    require('./dispatcher.php');
    ?>
<?php
    // TODO :
    // TODO 1 : Creation de personnages
    // TODO 2 : Hydratation de la database de l'entité.
    // TODO 3 : Creation d'un manager.

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game POO</title>
</head>
<body>
    <?php

    foreach ($data as $key=> $value) {
        echo '<h2>'.$key.' : '.$value.'</h2>';
    }


    ?>
    <br/>
   
</body>
</html>