<?php
require_once('database.php');
//
//get the data from the server 
if (isset($_GET["q"])) {
    //get the data
    $id = $_GET["q"];
} else {
    //echo an error message if we dint get here
    die("you do not have the data");
}
//get the id from the database 
$sql = "SELECT FROM book_info WHERE id= $id";
$result = $conn->query($sql);

$data = $result->fetchObject();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    
     
    </style>

</head>

<body>

    <!-- This is where the book that you have clicked on will appear and will also appear with its information -->
    <section id="animated-example" class="animated bounceInLeft info2">
        <?php echo $data->name ?>

    </section>
</body>

</html>