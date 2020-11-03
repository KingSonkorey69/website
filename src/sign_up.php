<?php
require_once "../database.php";

function error_generator($value)
{
    return "Please enter a $value";
}


$database = new Database();

//intialize variables 
$name =  $email = $mobile = $password = $confirm_password = "";
$name_err = $email_err = $mobile_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);


    if (empty($email)) {
        $email_err = error_generator("email");
        // die($email_err);
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "invalid email";
        } else {
            //check if email exists in database 
            $sql = "SELECT * FROM users where email = '$email'";
            $result = $database->query($sql);
            $rowCount = $result->rowCount();

            if ($rowCount > 0) {
                $email_err = "Email $email already exists";
            }
        }
    }

    if (empty($name)) {
        $name_err = error_generator("name");
    }

    if (empty($mobile)) {
        $mobile_err = error_generator("mobile");
    }

    if (empty($password)) {
        $password_err = error_generator("password");
    }

    if (strlen($password) < 8) {
        $password_err = "Password Cannot be less than 8 Characters";
    }

    if (empty($confirm_password)) {
        $confirm_password_err = error_generator('confirm password');
    } else {
        if ($password !== $confirm_password) {
            $confirm_password_err = 'Passwords do not match';
        }
    }


    if (empty($name_err) && empty($email_err) && empty($mobile_err) && empty($password_err) && empty($confirm_password_err)) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT into users(name, email, mobile, password)VALUES('$name', '$email', '$mobile', '$password_hash')";
        $database->exec($sql);

        http_response_code(201);
        $obj = new stdClass;
        $obj->message = "Inserted successfully";


        echo json_encode($obj);
        // //implement logic for ui
        // header("location:");
    } else {
        http_response_code(400);
        $obj = new stdClass;
        $obj->name_err = $name_err;
        $obj->email_err = $email_err;
        $obj->mobile_err = $mobile_err;
        $obj->password_err = $password_err;
        $obj->confirm_password_err = $confirm_password_err;



        echo json_encode($obj);
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <link rel="stylesheet" href="sign_up.css">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet"> 
    </head>
    <body>

        <form action="/action_page.php" >
            <div class="box">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label for="username"><b>User Name:</b></label>
                <input type="text" placeholder="Enter User Name" name="name" required>

                <label for="email"><b>Email:</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password:</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Repeat Password:</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                <label for="mobile"><b>Email:</b></label>
                <input type="text" placeholder="Enter Mobile No.." name="mobile" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>

                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>

    </body>
</html>