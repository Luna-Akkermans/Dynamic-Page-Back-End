<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $health = $_POST['health'];
    $attack = $_POST['attack'];
    $defense = $_POST['defense'];
    $weapon = $_POST['weapon'];
    $armor = $_POST['armor'];
    $bio = $_POST['bio'];


    try {
        global $conn;
        $sql = "UPDATE characters 
                SET health = :health, attack = :attack, defense = :defense, weapon = :weapon, armor = :armor, bio = :bio 
                WHERE id = :char_id";
        $stmt = $conn->prepare($sql);
        $params = array(
            ':health' => $health,
            ':attack' => $attack,
            ':defense' => $defense,
            ':weapon' => $weapon,
            ':armor' => $armor,
            ':bio' => $bio,
            ':char_id' => $_GET['id']
        );
        $stmt->execute($params);

        //Go to page of charachter back.
        header("Location: character.php?id=" . $_GET['id']);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
