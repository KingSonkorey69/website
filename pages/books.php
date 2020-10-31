<?php
include_once "../src/crud.php";
?>

<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  -->
    <!-- Title of the page -->
    <title>Gabriel Githinji Kimotho</title>
    <!--  -->
    <!-- Link the css together with the page -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/book.css">

    <!--  -->
    <!-- Linking google fonts on the page -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">




</head>

<body>

    <section class="read1">
        <!-- The name of the author -->
        <!-- The name of the author -->
        <a href="../index.php"><img class="logo" src="../assets/images/logo-01.png"></a>

        <div class="read_right">
            <!-- <a>Books</a> -->
            <a href="books.php">Books</a>
            <!-- contact information -->
            <a href="contact.php">About</a>

        </div>
    </section>

    <!-- This is the second section -->

    <section id="animated-example" class="animated bounceInLeft read2">


        <div class="read_details">

            <p id="center"><b>This forum is divided into different cohorts as follows:</b></p>
            <hr>

            <br>
            <br>
            1. Young reader’s corner: here there are beginners in Kiswahili books and Kiswahili stories. <br><br>
            2. Kiswahili Literary works for High School students (Form 1 to 4).<br><br>
            3. General poems and Mashairi.<br><br>
            4. Gikuyu beginner’s books.<br><br>
            5. Gikuyu general reader’s corner; here there are novels,<br>
            plays and even Marebeta for adults.<br><br>
            6. There’s also a forum for those who would like to learn Gikuyu<br>
            language and also those linguistic students researching on Gikuyu language.<br><br>
            7. Parents and teachers are encouraged to choose the right books for their children/ pupils and students.<br><br>

            NB: These are original works which should remain online.<br>
            Printing and or photocopying or producing materials from this site will amount to criminal proceedings.<br><br>
            <br>

        </div>
    </section>


    <!-- This will contain the title and some of the books -->
    <section id="backInUp" class="read3">

        <div class="row w-clearfix">
            <div class="col-12">
                <div class="heading ">
                    <div class="ruling"></div>
                    <h2 class="heading-rule">All Books</h2>
                    <div class="ruling"></div>
                </div>
            </div>
        </div>

        <div class="middle">

            <?php foreach (getImages('book_info') as $key => $value) : ?>
                <a href="../src/get_data.php?q=<?php echo $value['id'] ?>">
                    <div class="paragraph">

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
    <section class="read4 ">

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
    </section>

</body>

</html>