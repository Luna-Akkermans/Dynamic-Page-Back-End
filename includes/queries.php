<?php 



function CountAllCharachters(){
    global $conn;
    $sql = "SELECT COUNT(*) FROM `characters`; ";
    $qry = $conn->prepare($sql);
    $qry->execute();
    return $qry->fetchColumn();
}


function getAllCharachters(){
    global $conn;
    $sql = "SELECT * FROM `characters`";
    $qry = $conn->prepare($sql);
    $qry->execute();
    return $qry->fetchAll(PDO::FETCH_ASSOC);
}


?>