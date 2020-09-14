<?php


//require the database connection
require_once "database.php";

function getImages($table)
{
    $db = new Database();

    $sql = "SELECT * FROM " . $table;

    $result = $db->query($sql);
 
 
    return $result->fetchAll(PDO::FETCH_ASSOC);
    
}


