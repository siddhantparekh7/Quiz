<?php
session_start();

if(empty($_SESSION['email'])){
    ?>
    <script>
        alert("Please login to continue");
        window.location = "login.php";
        </script>
    <?php
}
?>
<head>
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="styles/index.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all" />
</head>

<body onload="NextQuestion(0)">
    <div class="header">
        <a href="index.php" class="logo">Quiz</a>
        <div class="header-right">
            <a href="index.php">Home</a>
            <a href="attempt-quiz.php">Attempt</a>
            <a class="active" href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <main>
        <div class="d-flex justify-content-center">
            <div class="card text-center ">
                <div class="card-header bg-success txt-center">
                    User name
                </div>
                <div class="card-body">
                    <h5 class="card-title">Score: 10/10</h5>
                    <p class="card-text">Quiz Code</p>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="card text-center ">
                <div class="card-header">
                    User name
                </div>
                <div class="card-body">
                    <h5 class="card-title">Score: 9/10</h5>
                    <p class="card-text">Quiz Code</p>
                </div>
                <div class="card-footer text-muted">
                    3 days ago
                </div>
            </div>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!--<script src="index.js"></script>-->
</body>