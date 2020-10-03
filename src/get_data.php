<?php
require_once "database.php";
$conn = new Database();
$id;
//
//get the data from the server 
if (isset($_GET['q'])) {
    $id = $_GET['q'];
} else {
    //echo an error message if we dint get here
    die("you do not have the data");
}
//get the id from the database 
$sql = "SELECT * FROM book_info WHERE id= $id";
//
$result = $conn->query($sql);
//
$data = $result->fetchObject();


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

    <link rel="stylesheet" type="text/css" href="../../assets/css/info.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


</head>

<body>
    <!-- This will be the information navigation bar will be -->
    <section class="info1">

        <!-- The name of the author -->
        <!-- The name of the author -->
        <a href="../index.php"> <img class="logo" src="../assets/images/logo-01.png"></a>

        <div class="info_title_right">

            <!-- <a>Books</a> -->
            <a href="books.php">Books</a>
            <!-- contact information -->
            <a href="contact.php">About</a>

        </div>

    </section>

    <!-- This is where the book that you have clicked on will appear and will also appear with its information -->
    <section id="animated-example" class="animated bounceInLeft info2">
        <?php echo $data->name ?>
        <img class="book" src="../assets/images/<?php echo $value['book_image']; ?>">

        <p><?php echo $value['book_title']; ?></p>

        <p><?php echo $value['book_title']; ?></p>
        <p><?php echo $value['book_author']; ?></p>
        <p><?php echo $value['book_upload_date']; ?></p>
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
        <div class="middle" id="<?php echo $value['id'] ?> ">
            <?php foreach (getImages('book_info') as $key => $value) : ?>

                <div class="paragraph">
                    <a href="get_data.php?q=<?php echo $value['id'] ?>">
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