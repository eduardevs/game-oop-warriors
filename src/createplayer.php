
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

    <form method="post" action="./dispatcher.php">
        <input type="hidden" name="todo" value="add"/>
        <label for="username">username</label>
        <input type="text" id="username" name="username" placeholder="jacksparrow"/>
        <label for="password">password</label>
        <input type="password" id="password" name="password" placeholder="your password"/>

        <input type="submit" value="Créer character" />
        <a class="btn btn-dark" href="./index.php">Return</a>

        <!-- <label>role</label>
        <input></input> -->
    </form>
    
</body>
</html>