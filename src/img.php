<?php
require_once('database.php');
require_once('crud.php');
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./assets/css/img.css">

</head>


<body>

    <div class="content">
        <h1> Book Info</h1>
    </div>

    <form class="box" action="fileupload.php" method="post" enctype="multipart/form-data">
        <input type="text" name="book_title" id="book_title" placeholder="Book Title">
        <label>Select image:<input type="file" name="fileToUpload" id="fileToUpload"></label>
        <input type="text" name="book_author_name" id="book_author_name" placeholder="Book Author Name">
        <input type="date" name="book_upload_date" id="book_upload_date" placeholder="Book Upload Date">
        <input type="text" name="book_isbno" id="book_isbno" placeholder="Book ISBNO...">
        <input type="text" name="book_synopsis" id="book_synopsis" placeholder="Book Synopsis">
        <input type="text" name="book_price" id="book_price" placeholder="Book Price">
        <input type="submit" value="Upload Data" name="submit">

    </form>


    <table class="content-table">
        <thead>
            <tr>

                <th>Book Title</th>
                <th>Book Author Name</th>
                <th>Book Upload date</th>
                <th>Book IsbNo</th>
                <th>Book Synopsis </th>
                <th>Book Price</th>

            </tr>
        </thead>

        <?php foreach (getImages('book_info') as $key) : ?>
            <img src="../assets/<?php echo $key['book_image']; ?>" /> <br>
            <tbody>
                <tr>



                    <td>
                        <h4 class="crud"><?php echo $key['book_title']; ?></h4>
                    </td>

                    <td>
                        <h4 class="crud"><?php echo $key['book_author_name']; ?></h4>
                    </td>

                    <td>
                        <h4 class="crud"><?php echo $key['book_upload_date']; ?></h4>
                    </td>

                    <td>
                        <h4 class="crud"><?php echo $key['book_isbno']; ?></h4>
                    </td>

                    <td>
                        <h4 class="crud"><?php echo $key['book_synopsis']; ?></h4>
                    </td>

                    <td>
                        <h4 class="crud"><?php echo $key['book_price']; ?></h4>
                    </td>
                </tr>
            </tbody>
            <tr>
                <form action="img_update.php" method="post">
                    <td><input type="text" name="book_image" id="book_title" placeholder="Book image"></td>
                    <td><input type="text" name="book_title" id="book_title" placeholder="Book Title"></td>
                    <!--                    <td><label>Select image:<input type="file" name="fileToUpload" id="fileToUpload"></label></td>-->
                    <td> <input type="text" name="book_author_name" id="book_author_name" placeholder="Book Author Name"></td>
                    <td> <input type="date" name="book_upload_date" id="book_upload_date" placeholder="Book Upload Date"></td>
                    <td><input type="text" name="book_isbno" id="book_isbno" placeholder="Book ISBNO..."></td>
                    <td><input type="text" name="book_synopsis" id="book_synopsis" placeholder="Book Synopsis"></td>
                    <td><input type="text" name="book_price" id="book_price" placeholder="Book Price"></td>
                    <input type="text" name="update" id="update" hidden value="<?php echo $key['id'] ?>">
                    <td> <input type="submit" class="update" value="update" /></td>


                </form>
                <form action="img_delete.php" method="post">

                    <input type="text" name="delete" name="delete " id="delete" hidden value="<?php echo $key['id'] ?>">

                    <td><input type="submit" class="delete" value="delete" /></td>
                </form>
            </tr>
        <?php endforeach; ?>


</body>

</html>