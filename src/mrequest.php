<?php
require_once "database.php";
require "../src/mpesa/details.php";

echo file_get_contents('php://input');

//
//chech if the requets is post 
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     //
//     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//     //

        
//      $d = new Details("254702129493", "200", "book_info");
//      $stk = new Stk($d);
//         //
//         //select the book_info, amount, mobile from the db.
//         $sql = 
//        "SELECT
// 	        book_info.book_title, book_info.book_price, users.mobile
//         FROM 
// 	        book_info 
//         INNER JOIN 
//             invoice 
//     	ON
//              invoice.book_info = book_info.book_info
//         INNER JOIN 
//             users
//     	ON
//              invoice.users =  users.users
//         WHERE
// 	        invoice.invoice =$id";
//         //return the result
//         $result = $this->db->query($sql);
//         //
//         echo $result->fetchAll(PDO::FETCH_ASSOC);
//         //echo json_encode($result);
//         //echo json_decode(file_get_contents('mpesa_request.php'));
// }else{
//     http_response_code(404);
//     $arr = [
//     "message" => "this is an error"
//     ];
//     echo json_encode($arr);
// }

