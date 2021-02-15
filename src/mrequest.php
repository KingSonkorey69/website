<?php
require_once "database.php";
require "./mpesa/details.php";
//
//chech if the requets is post 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if(isset($_POST['button'])){
        
     $d = new Details("254702129493", "200", "book_info");
     $stk = new Stk($d);
        //
        //
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
        //return the result
        $result = $this->db->query($sql);
        //
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }else{

    }
}

