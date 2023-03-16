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
        <div class="container mt-5">
            <div class="row">
            <div>
                <a href="./createplayer.php" class="btn btn-primary">Create user</a>
                <!-- this link fetch data from manager using fetch mode -->
                <a href="dispatcher.php?todo=all" class="btn btn-info ml-2">See all players</a>
            </div>
        </div>
        </div>
      
</body>
</html>