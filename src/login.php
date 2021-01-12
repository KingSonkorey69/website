<?php
//This is how you start a session
session_start();
//
//i want to set the usename as a session variable
$_SESSION['email'];
?>

<!DOCTYPE html>
<html>

<head>
   <title>LOGIN FORM </title>
   <link rel="stylesheet" href="../assets/css/login.css">
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet"> 
   <script>
   //
    //this is the login form side....
    login_form.addEventListener('submit', async (e) => {
        //
        //this will prevent it from submitting the form
        e.preventDefault();
        //
        //
        const formData = new FormData(login_form);

        const response = await fetch("./auth/login1.php", {
            method: "POST",
            body: formData
        });
        // wait for the response
        if (await response.status == 201) {
            console.log(await response.json());
        } else {
            const data = await response.json();

        }
    });
   </script>
</head>

<body>
      <form class="box" method="POST">
         <h1>Login</h1>
         <hr><br><br>

         <input type="text" id="email" name="email" placeholder="Email">
         <input type="password" id="password" name="password" placeholder="Password">
         <input type="submit" name="submit" id="submit" value="Login"><br>

         <p> New User <a href="sign_up.php">Register Here</a></p>
   </form>
</body>

</html>