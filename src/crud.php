<?php

//require the database connection
require_once "database.php";

//
//This class is to help in talking to the databse and getting certain 
//results to paint on certain pages.
class Crud
{
    //
    //The properties of the class.
    private $db;
    public $data;
    function __construct()
    {
        $this->db = new Database();
    }
    //
    //This method will get all the details from the table book_info and
    //display all the books for the user to see
    function getImages($table)
    {
        //
        //Get the data from the database
        $sql = "SELECT * FROM " . $table;
        //
        //return the result.
        $result = $this->db->query($sql);
        //
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    //
    //This method will hepl in getting the book synopsis and paint it on get_data.php.
    function getBooks($id)
    {   //
        //get the id from the database 
        $sql = "SELECT * FROM book_info WHERE book_info= $id";
        //
        //return the result
        $result = $this->db->query($sql);
        //
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    //
    //This method will get the users information and displayig it on his 
    //profile and see how many books he has purchased.
    function getInvoiceByUser($userId)
    {

        $sql = "SELECT name, email, mobile FROM users WHERE users.users = $userId";
        $user = $this->db->query($sql)->fetch(PDO::FETCH_ASSOC);

        //
        //Create an sql statement and get the id from the database. 
        $sql2 = "SELECT 
            book_title,
            book_price, 
            book_image,
            invoice_number 
        FROM 
            `invoice` 
        INNER JOIN 
            `book_info` ON `invoice`.`book_info` = `book_info`.`book_info`
        WHERE 
            `invoice`.`users` = $userId";

        //
        //return the result
        $result = $this->db->query($sql2);

        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        $arr = array(
            'user' => $user,
            'books' => $data
        );

        return $arr;
    }
//     function mrequest($id){
       
//        $sql = 
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
//         return $result->fetchAll(PDO::FETCH_ASSOC);
//     try {
//         $this->db->query($sql);
//         header('location: ../pages/mpesa_request.php');
//     } catch (Exception $e) {
//         echo $e->getMessage();
//     }
// }
}
