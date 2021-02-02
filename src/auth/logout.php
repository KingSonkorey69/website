<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
//
// destroy the session
session_destroy();
//
//
header('Location: http://localhost/website/index.php');
?>

</body>
</html>