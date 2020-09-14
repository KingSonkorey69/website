<!DOCTYPE html>
<html>

<head>
    <title>perfection</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        /* this will hold the title and the other links in the navbar */
        .one {
            /* This sets how an element is positioned in a document  */
            position: fixed;
            display: flex;
            flex-direction: row;
           
            background-color: #e4e3e3;
            width: 100%;
            height: 20%;
        }

        .navbar {
            padding: 12px 50px;
            font-family: "Playfair Display", serif;
           
            letter-spacing: 0.1rem;
            color: #3b6978;
        }
        .title{
            font-size: 35px;
            justify-content: flex-start;
        }
        .navtwo{
            display:flex;
            flex-direction: row;
            font-size: 25px;
            justify-content: right;
            justify-content: space-around;
            margin-right: -90%;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .two {
            display: flex;
            flex-direction: row;
            background-color: #84a9ac;
            width: 100%;
            height: 80%;
        }

        .three {
            display: flex;
            flex-direction: row;
            background-color: #84a9ac;
            width: 100%;
            height: 70%;
        }

        .four {
            display: flex;
            flex-direction: row;
            width: 100%;
            height: 60%;
            background-color: #204051;
        }
    </style>
</head>

<body>
    <!-- This section will contain the navbar where it will
     have the various things like the title/logo, contact & books  -->
    <section class="one">
        <div class="navbar">

            <!-- The name of the author -->
            <p class="title"><a href="index.php"> GABRIEL KIMOTHO GITHINJI</a></p>
           <div class="navtwo">
            <!-- This link will show you all the Books -->
            <a class="books" href="books.php">Books</a>
            <!-- This will take you or show you the author contact information -->
            <a class="contact" href="contact.php">About</a>
           </div>
        </div>
    </section>

    <section class="two">

    </section>
    <section class="three">

    </section>
    <!-- This section will be the footer and will have some quick links -->
    <section class="four">

    </section>
</body>

</html>