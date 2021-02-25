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

        
//
//check if the requets is post 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //get the id through the post['$id'];
    
        //  
        $d = new Details("254702129493", "200", "book_info");
        $stk = new Stk($d);
        //creating a new instance of the books representing the class in the crud.
        $crud = new Crud();
        //getting the getbooks and also giving it the id
        $crud->getBooks($id); 
        //
        //select the book_info, amount, mobile from the db.
        $sql = 
       "SELECT
	        book_info.book_title, book_info.book_price, users.mobile
        FROM 
	        book_info 
        INNER JOIN 
            invoice 
    	ON
             invoice.book_info = book_info.book_info
        INNER JOIN 
            users
    	ON
             invoice.users =  users.users
        WHERE
	        invoice.invoice =$id";
        //
        //return the result
        $result = $this->db->query($sql);
        //
        echo $result->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
       
        //echo json_decode(file_get_contents('mpesa_request.php'));
}else{
    http_response_code(404);
    $arr = [
    "message" => "this is an error"
    ];
    echo json_encode($arr);
}

