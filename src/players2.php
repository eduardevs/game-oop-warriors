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

   foreach ($players as $player) {
       echo('<tr><td>'.$player['id'].'</td><td>'.$player['name'].'</td></h2>');
   }
    ?>
    
    </tbody>
    </table>
    <a class="btn btn-dark" href="./index.php">Return</a>
   
</body>
</html>