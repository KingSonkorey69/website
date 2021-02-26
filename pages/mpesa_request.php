<?php
session_start();
include_once "../src/mrequest.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
    </script>
</head>
<body>
    <section class="mreq">
    <div>
            <p class="details">
            <p class="id"><?php echo ['book_info'][0];?></p>
            <p class="mobile"><?php echo $_SESSION['mobile'];?></p>
            </p>
           
            
        </div>
    </section>
    
</body>
</html>