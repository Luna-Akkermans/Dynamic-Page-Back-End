<?php
    //Require DB connection
    require '../includes/db.php';
    //Include queries
    include '../includes/queries.php';
    //Include functions
    include '../includes/functionality.php';
    //Get data.
    $char_data = getSpecificCharacter($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="../assets/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?= $char_data !== false ? $char_data['name'] : "Error: Character not found" ?></h1>
    <a class="backbutton" href="../index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="../assets/images/<?=$char_data['avatar']?>">
            <div class="stats" style="background-color: yellowgreen">
                <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?=$char_data['health']?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?=$char_data['attack']?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?=$char_data['defense']?></li>
                </ul>
                <ul class="gear">
                <?php if ($char_data['weapon'] !== null): ?>
                    <li><b>Weapon</b>: <?=$char_data['weapon']?></li>
                <?php endif;?>
                <?php if ($char_data['armor'] !== null): ?>
                    <li><b>Armor</b>: <?=$char_data['armor']?></li>
                <?php endif;?>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?=$char_data['bio']  ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Luna Mila Akkermans 2023</footer>
</body>
</html>