<?php
require_once('database.php');
deleteUsers();

function deleteUsers()
{
    
    $db = new Database();
    $id = intval($_POST["delete"]);

    $sql = "DELETE FROM user_info WHERE id= $id";

    try {
        $db->query($sql);
        header('location: test.php');
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}