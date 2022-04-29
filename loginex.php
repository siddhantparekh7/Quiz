<?php
session_start();
$_SESSION['email'] = "";
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
    <?php if(isset($_POST['login'])){

$insert = false;

$server = "localhost";

$username = "root";

$password = "";


$con = mysqli_connect($server, $username, $password);

$email = $_POST['emailInput'];
$password = $_POST['passwordInput'];

$flag = 0;
$loginSql = "SELECT `email`,`password`,`role` FROM `quiz`.`userinfo` WHERE `email` = '$email';";
$result = $con->query($loginSql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        if($row["password"] == $password && $row["email"] == $email && $row["role"] == 'Admin') {
            $flag = 2;
            $_SESSION['email'] = $email;
            
            break;
        }
        if($row["password"] == $password && $row["email"] == $email) {
            $_SESSION['email'] = $email;
            $flag = 1;
        }
    }
}

if($flag == 2){
	?>
    <script>
        alert("Welcome Admin");
        window.location = "admin-home.php";
        </script>
    <?php
}

if($flag == 1){
	?>
    <script>
        alert("Login Successful");
        window.location = "index.php";
        </script>
    <?php
}

if (!$con) {
 die();
}
}
?>
</body>
</html>