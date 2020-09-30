<?php
require_once('database.php');
//
//get the data from the server 
if(isset($_GET["q"])){
    $id= $_GET['q'];


}else{
//echo an error message if we dint get here
die("you do not have the data");

}
//get the id from the database 
$sql = "SELECT FROM book_info WHERE id= $id";
$result = $conn->query($sql);

$data = $result->fetchObject();
