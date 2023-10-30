<?php 
    //Require DB connection
    require 'includes/db.php';
    //Include queries
    include 'includes/queries.php';
    //Get data from database
    $total = CountAllCharachters();
    $charachters = getAllCharachters();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle <?=$total ?> characters uit de database</h1>

</header>
<div id="container">
    <!-- Loop throgh array given back -->
    <?php foreach($charachters as $charachter){   ?>                            
    <a class="item" href="pages/character.php?id=<?=$charachter['id'] ?>">
        <div class="left">
            <img class="avatar" src="assets/images/<?=$charachter['avatar']?>">
        </div>
        <div class="right">
            <h2><?=$charachter['name']?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?=$charachter['health']?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?=$charachter['attack']?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?=$charachter['defense']?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <?php }?>
</div>

<footer>&copy; Luna Mila Akkermans 2023</footer>
</body>
</html>