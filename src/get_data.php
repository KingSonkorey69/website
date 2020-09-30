<?php
require_once('database.php');
//
//get the data from the server 
if(isset($_GET["q"])){
//get the q 
$sql = "SELECT FROM book_info WHERE id= $id";

}else{
//echo an error message if we dint get here
die("you do not have the data");

}
