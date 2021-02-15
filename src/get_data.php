<?php
include_once "crud.php";
session_start();
//
//get the data from the server 
if (isset($_GET['q'])) {
    //
    //creating a new instance of the books representing the class in the crud.
    $crud = new Crud();

    $id = $_GET['q'];
    //getting the getbooks and also giving it the id
    $value = $crud->getBooks($id)[0];
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
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/get_data.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <script>
            //
            //get the button id
            const btn = document.querySelector("#button");
           
            //listen to the button when clicked
            btn.addEventListener("button", async (e) => {
                alert("hello");
                //
                //this will prevent it from submitting the form
                e.preventDefault();
                //
                const formData = new formData();
                formData.append('book_info');
                formData.append('book_price');
                formData.append('mobile');

                const response = await fetch("mrequest.php", {
                    method: "POST",
                    body: formData
                });
                console.log(await response.status)
                //wait for the response
                if (await response.status == 200) {
                    console.log(await response.json());
                    alert(await response.body);
                    window.location.href = "http://localhost/website/pages/mpesa_request.php";
                } else {
                    console.log("anything");
                    const data = await response.json();


                }
            });
        
    </script>
</head>

<body>
    <!-- This will be the information navigation bar will be -->
    <section class="info1">

        <!-- The name of the author -->
        <!-- The name of the author -->
        <a href="../index.php"> <img class="logo" src="../assets/images/logo-01.png"></a>

        <div class="info_title_right">

            <!-- <a>Books</a> -->
            <a href="../pages/books.php">Books</a>
            <!-- contact information -->
            <a href="../pages/contact.php">About</a>
            <!-- if the user has logged in the show the logout button otherwise show the login button -->
            <?php
            if (isset($_SESSION['email'])) {

                echo "<a href='./auth/logout.php'>Logout</a>";
            } else {
                echo "<a href='./login.php'>Login</a>";
            }

            ?>

        </div>


    </section>

    <!-- This is where the book that you have clicked on will appear and will also appear with its information -->
    <section id="animated-example" class="animated bounceInLeft info2">


        <div class="kikuyu">
            <img src="../assets/images/<?php echo $value['book_image']; ?>">
        </div>

        <div class="info_detail">
            <b>
                <h1 class="info_header"><?php echo $value['book_title']; ?></h1>
            </b>
            <hr>

            <p>
                <?php echo $value['book_synopsis']; ?>
            </p>
            <br>
            <br>
            <br>
            <br>

            <p>
                Author: <?php echo $value['book_author_name']; ?>.
                <br>
                <br>
                Date Published: <?php echo $value['book_upload_date']; ?>.<br><br>
                ISBNO: <?php echo $value['book_isbno']; ?>.<br><br>
                Price: <?php echo "Ksh" . $value['book_price']; ?>
            </p>
            <?php
            if (isset($_SESSION['email'])) { ?>
                <button id="button" class="websa" >BUY NOW </button>

            <?php } else { ?>
                <p>Please login to purchase</p>
            <?php }
            ?>
        </div>

    </section>

    <!-- This is where some of the books will be displayed -->
    <section class="info3" id="backInUp">
        <!-- This is where the title of showing the books will be..... -->
        <div class="row w-clearfix">
            <div class="col-12">
                <div class="heading">
                    <div class="ruling"></div>
                    <h2 class="heading-rule">Other Books</h2>
                    <div class="ruling"></div>
                </div>
            </div>
        </div>

        <!-- This is the where the book images will be shown together with the (title, date) -->
        <div class="middle ">
            <?php foreach ($crud->getImages('book_info') as $key => $value) : ?>

                <div class="paragraph">
                    <a href="get_data.php?q=<?php echo $value['book_info'] ?>">
                        <img class="book" src="../assets/images/<?php echo $value['book_image']; ?>">

                        <p><?php echo $value['book_title']; ?></p>
                        <p><?php echo $value['book_upload_date']; ?></p>
                    </a>
                </div>


            <?php
            endforeach;
            ?>

        </div>

    </section>


    <section class="newsletter">
        <div class="sub">
            <span>Subscribe To Our Newsletter</span>
        </div>
        <div class="join">
            <input type="email" name="EMAIL" value="" placeholder=" ENTER YOUR EMAIL......" class="ee">

            <input type="submit" value="Join now" class="bb">

        </div>

    </section>

    <!-- The footer will some information of the author -->
    <section class="info4 ">

        <div class="footer-left">
            <h1> Links</h1>

            <a href="books.php">Books</a>
            <a href="contact.php">About</a>

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

            <img class="payment-img" src="../assets/images/Till Number.png">

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