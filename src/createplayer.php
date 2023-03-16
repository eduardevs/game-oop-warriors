<?php
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

<?php include('./inc/header.php'); ?>
    <div class="container mt-5">
    <?php
        if ($_SESSION['success']) {
            echo '<div class="alert bg-info text-white">'.$_SESSION['success'].'</div>';
        }

        unset($_SESSION['success']);
?>
    <form method="post" action="./dispatcher.php" class="form">
        <input type="hidden" name="todo" value="add" class="form-control"/>
        <label for="username" class="form-label">Username</label>
        <input type="text" id="username" name="username" placeholder="jacksparrow" class="form-control"/>
        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" name="password" placeholder="your password" class="form-control"/>

        <input type="submit" value="Créer character" class="btn btn-primary mt-3"/>
    </form>
    <div class="mt-5">

        <a class="btn btn-dark" href="./index.php">Return</a>
    </div>
</div>
</body>
</html>