<?php
require_once "database.php";
include_once "crud.php";
require "../src/mpesa/details.php";
include_once '../debug.php';
include_once "../vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


//
// create a log channel
$log = new Logger('name');
//specify where to log the error and  also put the name of the file.
$log->pushHandler(new StreamHandler(__DIR__ . '/../kimotho.log', Logger::INFO));
// add records to the log
$log->info(json_encode($_POST));


// //
// //check if the requets is post 
if (isset($_POST['id'])) {
    //
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //get the id through the post['$id'];
    //get the id that you sent from javascript and save it in a variable called $id
    //$id; //
    $id = $_POST["id"]; 
    //Create an instance of crud so as to access the method getBooks
    $crud = new Crud();

    //pass the id to the method and save the result in a variable called book
    $book = $crud->getBooks($id);

    //create a new details object. it requires 3parameters mobile->gotten from sessions,  price->gotten from getBooks and title->gotten from getBooks 
    $purchase = new Details("user mobile", "book price", "book title"); //replace with actual values
    $stk = new Stk($purchase);

    //return the mpesa result
    echo json_encode($stk->result);
}else{
    http_response_code(404);
    $arr = [
        "message" => "this is an error"
    ];
    echo json_encode($arr);
}
