<?php
include_once "../src/crud.php";
session_start();
$id;
//
//get the data from the server 
if (isset($_GET['w'])) {
    //
    //creating a new instance of the books representing the class in the crud.
    $crud = new Crud();

    $id = $_GET['w'];
    //getting the getbooks and also giving it the id
    $value = $crud->getUsers($id)[0];
} else {
    //
    //echo an error message if we didnt get here
    die("you do not have the data");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/profile.css">
        <title>Document</title>
    </head>
    <body>
        <!-- This is where the nav-bar will be. -->
        <section class="section1">

            <!-- The name of the author -->
            <a href="index.php"> <img class="logo" src="./assets/images/logo-01.png"></a>

            <!-- The quick links will be at the right -->
            <div class="title-right">
                <!-- This link will show you all the Books -->
                <a href="./pages/books.php">Books</a>
                <a href="./pages/contact.php">About</a>
                <?php
                    if(isset($_SESSION['id'])){
                        echo "<a href='profile.php'>Profile</a>";
                        echo "<a href='../src/auth/logout.php'>Logout</a>";

                    }else{
                        echo "<a href='./src/login.php'>Login</a>";
                    }
                
                ?>

                <!-- This will redirect the user to the login page-->
                
                <!-- If the user has not logged in then he should sign up-->

            </div>


        </section>
        <!-- end of the first section -->
        <section class="section2">
        <div class="container">
                
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Invoice Number</th>
            <th>User</th>
            <th>Book Info</th>
            <th>Date</th>
        </tr>
        </thead>
        <?php foreach ($crud->getUsers('invoice') as $key) : ?>
            <tbody>
                <tr>
                    <td>
                        <h4><?php echo $key['id']; ?></h4>
                    </td>
                    <td>
                        <h4><?php echo $key['invoice_number']; ?></h4>
                    </td>
                    <td>
                        <h4><?php echo $key['user']; ?></h4>
                    </td>
                    <td>
                        <h4><?php echo $key['book_info']; ?></h4>
                    </td>
                    <td>
                        <h4><?php echo $key['date']; ?></h4>
                    </td>
                </tr>
            </tbody>
        <?php endforeach; ?>

        </table>
        </div>
        </section>
        <section class="newsletter">
            <div class="sub">
                <span>Subscribe To Our Newsletter</span>
            </div>
            <div class="join">
                <input type="email" name="EMAIL" value="" placeholder=" ENTER YOUR EMAIL......" class="ee">

            <a href="../src/login.php"> <input type="submit" value="Join now" class="bb"></a>

            </div>

        </section>

        <div class="hr"></div>

        <!-- The footer will some information of the author -->
        <section class="section4 ">

            <div class="footer-left">
                <h1> Links</h1>

                <a href="../pages/books.php">Books</a>
                <a href="../pages/contact.php">About</a>

            </div>
            <div>
            </div>

            <div class="footer-right">
                <h1> Contact</h1>

                <span>0722868642</span>
                <span>P.O Box 241-00100</span>
                <span>Nairobi, Kenya</span>

                <a href="ggwanjata@yahoo.com">ggwanjata@yahoo.com</a>


            </div>
            <div class="footer-center">
                <span>Follow Me</span>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>


            </div>


            <div class="last">

                <img class="payment-img" src="./assets/images/Till Number.png">

            </div>

        </section>

        <div class="hr"></div>

        <section class="section5">

            <div class="sam">
                <span>© 2020 GGK, All rights reserved.</span>
                <span>Website: Samuel Kimotho</span>
            </div>
        </section>

        <!-- This is where the user will be able to talk with the author directly -->
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">

            
            var Tawk_API = Tawk_API || {},
                        Tawk_LoadStart = new Date();
                    (function() {
                        var s1 = document.createElement("script"),
                            s0 = document.getElementsByTagName("script")[0];
                        s1.async = true;
                        s1.src = 'https://embed.tawk.to/5f197d4fa45e787d128bfc8a/default';
                        s1.charset = 'UTF-8';
                        s1.setAttribute('crossorigin', '*');
                        s0.parentNode.insertBefore(s1, s0);
                    })();
        </script>
        <!--End of Tawk.to Script--> 
    </body>
</html>