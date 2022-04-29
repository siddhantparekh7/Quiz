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
<!DOCTYPE HTML>
<html>

<head>
    <title>Admin</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="styles/index.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Style-CSS 
	<link href="styles/font-awesome.min.css" rel="stylesheet">-->
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

</head>

<body>
    <div class="header">
        <a href="admin-home.php" class="logo">Quiz</a>
        <div class="header-right">
            <a class="active" href="admin-home.php">Home</a>
            <a href="admin.php">Add Question</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="justify-content: center" style="padding: 20px;">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="email" class="form-control" style="width: 50%;" id="exampleFormControlInput1"
                placeholder="Quiz Title">
        </div>
        <label for="exampleDataList" class="form-label">Tags</label>
        <input class="form-control" list="datalistOptions" style="width: 30%;" id="exampleDataList"
            placeholder="Type to search...">
        <datalist id="datalistOptions">
            <option value="Physics">
            <option value="Maths">
            <option value="History">
        </datalist>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Date</label>
            <input type="date" class="form-control" style="width: 30%;" id="exampleFormControlInput1"
                placeholder="Enter Date">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Time</label>
            <input type="time" class="form-control" style="width: 30%;" id="exampleFormControlInput1"
                placeholder="Enter Time">
        </div>
        <div class="main-bg">
            <div class="col-md-7">
                <div id="code" style="background-color:#ccc; height:50px; margin-top: 20px; width:40%;"></div>
                <br />
                <div style="padding-top: 10px;">
                    <button type="button" class="btn btn-primary" onclick="getCode(this);" />
                        <span class="glyphicon glyphicon-random"></span> Generate</button>
                </div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <script src="scripts/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>


</html>