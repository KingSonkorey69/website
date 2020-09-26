<?php

//require the database connection
require_once "./database.php";
require_once "./debug.php";


$target_dir = "assets/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$image_name =  basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
var_dump($imageFileType);

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    echo $target_file;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        //
        $db = new Database();
        
        $fileToUpload = $_POST['fileToUpload'];
        $book_title = $_POST['book_title'];
        $book_author_name = $_POST['book_author_name'];
        $book_upload_date = $_POST['book_upload_date'];
        $book_isbno = intval($_POST['book_isbno']);
        $book_synopsis = $_POST['book_synopsis'];
        $book_price = intval($_POST['book_price']);
        
        $sql = "INSERT INTO book_info(book_title, book_author_name,book_upload_date,book_isbno,book_synopsis,book_price,book_image) VALUES('$book_title', '$book_author_name','$book_upload_date' ,'$book_isbno','$book_synopsis', '$book_price','$image_name')";
        
        
        if ($db->exec($sql)>0) {
            header('location: books.php');
        } else {
            die($db->errorCode());
        }
    } else {

        echo "Sorry, there was an error uploading your file.";
    }
}
?>