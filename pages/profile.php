<?php
session_start();

include_once "../src/crud.php";
include_once '../debug.php';

 use Monolog\Logger;
 use Monolog\Handler\StreamHandler;

 include_once "../vendor/autoload.php";


// create a log channel
 $log = new Logger('kimotho');
 $log->pushHandler(new StreamHandler(__DIR__ . '/../debug.log', Logger::INFO));
$user;
$books;


$log->info(json_encode($_SESSION));
//
//get the data from the server 
if (isset($_SESSION['id'])) {
    //
    //creating a new instance of the books representing the class in the crud.
    $crud = new Crud();
    //getting the getbooks and also giving it the id.
    $value = $crud->getInvoiceByUser($_SESSION['id']);
    $user = $value['user'];
    $books = $value['books'];
    $log->info(json_encode($value));
} else {
    //
    //echo an error message if we didnt get here.
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
    <!--
            This is where the nav-bar will be.
        -->
    <section class="section1">

        <!--
                 The name of the author
            -->
        <a href="index.php"> <img class="logo" src="../assets/images/logo-01.png"></a>

        <!-- 
                The quick links will be at the right
            -->
        <div class="title-right">
            <!-- 
                    This link will show you all the Books
                -->
            <a href="./pages/books.php">Books</a>
            <!-- 
                    This link will show the users details
                -->
            <a href="./pages/contact.php">About</a>
            <!-- 
                    Show the user the profile button and 
                    the logout button if they have logged in.
                -->
            <?php
            //
            //If the user has logged in provide him with the current service if not
            //login.
            if (isset($_SESSION['id'])) {
                //
                //Show the user the logout button.
                echo "<a href='../src/auth/logout.php'>Logout</a>";
            } else {
                //Show the user the login button if they have not logged in.
                //This will redirect the user to the login page.
                echo "<a href='./src/login.php'>Login</a>";
            }
            ?>
        </div>


    </section>

    <section class="hero">
        <div>
            <p><?php echo $user['name']; ?></p>
            <p><?php echo $user['email']; ?></p>
            <p><?php echo $user['mobile']; ?></p>
        </div>
        <div>
            <?php if (count($books) > 0) : ?>
                <p>Books purchased <?php echo count($books) ?></p>
            <?php else : ?>
                <p>Books purchased 0</p>
            <?php endif; ?>
        </div>

    </section>

    <section class="books">
        <?php if (count($books) > 0) :
            foreach ($books as $key => $value) : ?>

                <div class="card">
                    <img width="200" src="../assets/images/<?php echo $value['book_image']; ?>" alt="">
                    <p><?php echo $value['book_title']; ?></p>
                    <a href="../assets/books/book1.pdf" download>DOWNLOAD</a>
                </div>

            <?php endforeach; ?>

        <?php else : ?>
            <!-- has not purchased a book -->
            <div>
                <p>You havent purchased any books</p>
                <a href="">PURCHASE BOOKS</a>
            </div>
        <?php endif; ?>

    </section>

</body>

</html>