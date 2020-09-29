<?php
include_once "./src/crud.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        The Front Page
    </title>

    <!-- All the links to various fonts and also animations -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="./assets/css/kim.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <script>
        //
        //get all the books 
        const x = document.querySelectorAll(".books");
        //
        //loop over enery book and for that one book get the id
        x.forEach(book => {
            //add the click event listener on the book
            book.addEventListener("click", function() {
                //
                //get the attribute which is the id
                const get_id = book.getAttribute("id");
                //
                //open a new window to go to the place where i will display the books
                window.location.href = "info.php";
                //
                //get the div form the info php where to actually place the book itself
                const info_2 = document.getElementsByClassName(".info2");
                //
                //clear the html/its section
                info_2.innerHTML = '';
                //
                //replace the html with the current html of the book that i have clicked on.
                info_2.innerHTML =  book;
            });
            //
        });
    </script>


</head>

<body>

    <!-- This is where the nav-bar will be. -->
    <section class="section1">

        <!-- The name of the author -->
        <a href="index.php"> <img class="logo" src="./assets/images/logo-01.png" ></a>

        <!-- The quick links will be at the right -->
        <div class="title-right">
            <!-- This link will show you all the Books -->
            <a href="./pages/books.php">Books</a>
            <a href="./pages/contact.php">About</a>
        </div>


    </section>
    <!-- end of the first section -->

    <!-- This is where all the new books that the author has written will be displayed -->
    <section id="animated-example" class="animated bounceInLeft section2">
        <!-- This is where the new books will enter with animation bounce in left -->

        <div class="info">
            <h1 class="hero">GUTENG'URUO ITHAKO RIA GIKUYU</h1>
            <h1 class="hero">No. 1. National Bestseller</h1>
            <p class="hero1">This is not a kikuyu story. It’s a story about the kikuyu culture.</p>
            <p class="hero1">Out Now</p>
            <!-- This button will actually tell you more or what you want to know about the book -->
            <button class="web"><a href="./pages/info.php">Learn More</a></button>
        </div>
        <!-- the image  -->
        <div class="kikuyu">
            <img src="./assets/images/kikuyu.jpg">
        </div>

    </section>
    <!-- end of the section -->

    <!-- This is where some of the books will be displayed -->
    <section  id="backInUp" class="section3">

        <!-- This is where the title of showing the books will be..... -->
        <div class="row w-clearfix">
            <div class="col-12">
                <div class="heading">
                    <div class="ruling"></div>
                    <h2 class="heading-rule">Well - Liked Books</h2>
                    <div class="ruling"></div>
                </div>
            </div>
        </div>

        <!-- This is the where the book images will be shown together with the (title, date)
        and all the books -->

        <div class="middle" id="<?php echo $value['id']?> ">

            <?php foreach (getImages('book_info') as $key => $value) : ?>
                

               
                <div class="paragraph">
                <a href="info.php?q=<?php echo $value['id'] ?>">
                    <img class="book" src="./assets/images/<?php echo $value['book_image']; ?>" >

                  
                        <p><?php echo $value['book_title']; ?></p>
                        <p><?php echo $value['book_upload_date']; ?></p>
                        </a>
                    </div>
                   
                
            <?php
            endforeach;
            ?>

        </div>
        <!-- This button will lead you to the books page where all the books will be displayed  -->
        <button class="websa"><a href="./pages/books.php">View More Books</a></button>


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
    
   <div class="hr"></div>

    <!-- The footer will some information of the author -->
    <section class="section4 ">

        <div class="footer-left">
            <h1> Links</h1>

            <a href="#">Books</a>
            <a href="#">About</a>

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