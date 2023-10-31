<?php
require '../includes/db.php';

global $conn;

// Check if the user ID is provided in the URL
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $sql = "DELETE FROM characters WHERE `characters`.`id` = :id"; // Adjust the table and column names accordingly
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $userId);
    $stmt->execute();

    
    header("Location: ../index.php");
} else {
    echo "EROROR.";
}
?>
