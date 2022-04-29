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
        <a href="index.html" class="logo">Quiz</a>
        <div class="header-right">
            <a href="index.html">Home</a>
            <a class="active" href="attempt-quiz.html">Attempt</a>
            <a href="profile.html">Profile</a>
        </div>
    </div>
    <main>
        <div class="d-flex justify-content-center">
            <form>
                <div class="form-group code-field ">
                    <h1>Enter code here</h1>
                    <input type="text" class="form-control" id="code" placeholder="Enter Code" required />
                    <div id="result"></div>
                    <br />
                    <div class="d-grid gap-2 col-6 mx-auto"><button class="btn btn-primary" id="button" type="submit"
                            onclick="checkCode(this);">Confirm</button>
                        <br />
                    </div>

                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!--<script src="index.js"></script>-->
</body>