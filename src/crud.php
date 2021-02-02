<?php


//require the database connection
require_once "database.php";



class Crud
{
    private $db;
    public $data;
    function __construct()
    {
        $this->db = new Database();
    }

    function getImages($table)
    {
        //
        //Get the data from the database
        $sql = "SELECT * FROM " . $table;

        $result = $this->db->query($sql);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function getBooks($id)
    {
        //get the id from the database 
        $sql = "SELECT * FROM book_info WHERE id= $id";
        //return the result
        $result = $this->db->query($sql);
        //
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
