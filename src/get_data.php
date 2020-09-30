<?php
require_once('database.php');
//
//get the data from the server 
if(isset($_GET["q"])){
//get the q 
$sql = "DELETE FROM user_info WHERE id= $id";

try {
    $db->query($sql);
    header('location: ../pages/info.php');
} catch (Exception $e) {
    echo $e->getMessage();
}
}else{
//echo an error message if we dint get here
die("you dot have the data");

}
