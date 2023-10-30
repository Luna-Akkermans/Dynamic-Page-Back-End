<?php 

// DB Config
$host = "localhost";
$dbname = "charachters";
$username = "root";



//Establish connection
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username);
    
    //Set PDO to error mode to execption
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Connection check
} catch (PDOException $e) {
    die("Failed to establish connection " . $e->getMessage());
}
?>