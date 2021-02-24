<?php
session_start();

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
            <p class="title">
                <?php 
                    if(isset($_REQUEST['title'])){echo  $_REQUEST['title']; }
                    else{echo "no title was found";}
                ?>
            </p>
            <p class="mobile"><?php echo $_SESSION['mobile'];?></p>
            <p class="amount"><?php echo $_REQUEST['amount'][0]; ?></p>
        </div>
    </section>
    
</body>
</html>