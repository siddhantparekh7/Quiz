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
</head>
<body>
    <?php

    if(isset($_SESSION['email'])) {

        session_unset();
        session_destroy();

        ?>
        <script>
            alert("You have been Logout!");
            window.location = "login.php";
        </script>
         <?php
        //  header("Location : login.php");

    }
    
    ?>
</body>
</html>