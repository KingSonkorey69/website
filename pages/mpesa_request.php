<?php
 include_once "../src/mrequest.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="mreq">
    <div>
            <p><?php echo $value['book_info']; ?></p>
            <p><?php echo $value['mobile']; ?></p>
            <p><?php echo $value['book_price']; ?></p>
        </div>
    </section>
    
</body>
</html>