<?php
require_once "../database.php";

$database = new Database();

//intialize variables 
$email = $password =  "";
$email_err = $password_err = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    //check if the email is valid
    if (empty($email)) {
        $email_err = "Please enter the correct email";
        // die($email_err);
    } else {
        $sql = "SELECT email from users where email = '$email'";
        $result = $database->query($sql);
        if ($result->rowCount() < 1) {
            $email_err = "Email doesnt exist";
            http_response_code(404);
            $obj = new stdClass;
            $obj->email_err = $email_err;

            echo json_encode($obj);
            die();
        }
    }

    //check if the password is valid 
    if (empty($password)) {
        $password_err = "Enter the correct password";
    } else {
        $sql = "SELECT password FROM users where email= '$email'";

        $result = $database->query($sql)->fetchObject();
        // var_dump($result);

        if (!password_verify($password, $result->password)) {
            $password_err = "Invalid Password";
        }
    }

    if (empty($email_err) && empty($password_err)) {
        //user has successfully logged in 
        $sql = "SELECT name, mobile FROM users WHERE email = '$email'";
        $result = $database->query($sql)->fetchObject();

        $result->email = $email;

        echo json_encode($result);
    } else {
        http_response_code(401);
        $obj = new stdClass;
        $obj->email_err = $email_err;
        $obj->password_err = $password_err;
        $obj->status = http_response_code();
        echo json_encode($obj);
    }
} else {
    die("request is not a post");
}