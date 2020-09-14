<?php
require_once('database.php');
updateUsers();

function updateUsers()
{
  $db = new Database();
    $id = intval($_POST['update']);
        $fileToUpload = $_POST['fileToUpload'];
        $book_title = $_POST['book_title'];
        
        $book_author_name = $_POST['book_author_name'];
        $book_upload_date = $_POST['book_upload_date'];
        $book_isbno = intval($_POST['book_isbno']);
        $book_synopsis = $_POST['book_synopsis'];
        $book_price = intval($_POST['book_price']);
    
    
  $sql = "UPDATE book_info SET fileToUpload='$fileToUpload' book_title='$book_title', book_author_name='$book_author_name', book_upload_date='$book_upload_date', book_isbno='$book_isbno', book_synopsis='$book_synopsis', book_price='$book_price' WHERE id= $id";

  try {
    $db->query($sql);
    header('location: img.php');
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}
