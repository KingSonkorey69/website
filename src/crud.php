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
        //
        //Create an sql statement and get the id from the database. 
        $sql ="SELECT 
            `users`.`name`,
            `users`.`email`, 
            `users`.`mobile`, 
            `book_info`.`book_title`,
            `book_info`.`book_price` 
        FROM 
            `invoice` 
        INNER JOIN 
            `users` 
        ON 
            `invoice`.`users`
            = `users`.`users`
        INNER JOIN 
            `book_info`
        ON 
            `invoice`.`book_info`
            = `book_info`.`book_info`
        WHERE 
            `users`.`users` 
            = `$userId`";
        //
        //return the result
        $result = $this->db->query($sql);
        //
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
   
}
