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
$insert = false;

$server = "localhost";

$username = "root";

$password = "";

$Dbname = "quiz";

$con = mysqli_connect($server, $username, $password, $Dbname);

if (!$con) {
    die("Connection to this database failed due to" . mysqli_connect_error());
}

$sql = "SELECT * FROM `questions` JOIN question_choice ON questions.q_id = question_choice.q_id;";
$result = mysqli_query($con, $sql);
$question = array();
$i = 0;
$key = 0;

while ($row = $result->fetch_assoc()) {
    $question[$i] = $row;
    $i++;
    
    // if ($i == 0) {
    //     $obj = array();
    //     $obj["question"] = $row["question"];
    //     $question[$i] = $obj;
    // }
    // var_dump($row);

    
    // $a = $question[$i];
    // // var_dump($a);
    // $b = $key;
    // $a[$b] = $row["choice"];
    
    // // var_dump($a);
    // $question[$i] += $a;
    // // var_dump($question[$i]);
    // $key++;
}

// print_r(json_encode($question, JSON_PRETTY_PRINT));

// for ($x = 0; $x <= mysqli_num_rows($result); $x++) {

//     if($x%4 == 0){
//         $obj = array();
//     }
//     $
//     $row = mysqli_fetch_row($result);
// }
$con->close();
?>
<html>

<head>
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="styles/index.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="./scripts/index.js"></script>
    
</head>

<body onload="NextQuestion(0)">
<div id ="questions" hidden><?php print_r(json_encode($question, JSON_PRETTY_PRINT)); ?></div>
    <div class="header">
        <a href="#default" class="logo">Quiz</a>
        <div class="header-right">
            <a class="active" href="index.php">Home</a>
            <a href="attempt-quiz.php">Attempt</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <main>
        <!-- creating a modal for when quiz ends -->
        <div class="modal-container" id="score-modal">

            <div class="modal-content-container">

                <h1>Congratulations, Quiz Completed.</h1>

                <div class="grade-details">
                    <p>Attempts : 10</p>
                    <p>Wrong Answers : <span id="wrong-answers"></span></p>
                    <p>Right Answers : <span id="right-answers"></span></p>
                    <p>Grade : <span id="grade-percentage"></span>%</p>
                    <p><span id="remarks"></span></p>
                </div>

                <div class="modal-button-container">
                    <button onclick="closeScoreModal()">Continue</button>
                </div>

            </div>
        </div>
        <div class="quiz-align">
            <div class="game-quiz-container">

                <div class="game-details-container">
                    <h1>Score : <span id="player-score"></span> / 10</h1>
                    <h1> Question : <span id="question-number"></span> / 10</h1>
                </div>

                <div class="game-question-container">
                    <h1 id="display-question"></h1>
                </div>

                <div class="game-options-container">

                    <div class="modal-container" id="option-modal">

                        <div class="modal-content-container">
                            <h1>Please Pick An Option</h1>

                            <div class="modal-button-container">
                                <button onclick="closeOptionModal()">Continue</button>
                            </div>

                        </div>

                    </div>

                    <span>
                        <input type="radio" id="option-one" name="option" class="radio" value="option1" />
                        <label for="option-one" class="option" id="option-one-label"></label>
                    </span>


                    <span>
                        <input type="radio" id="option-two" name="option" class="radio" value="option2" />
                        <label for="option-two" class="option" id="option-two-label"></label>
                    </span>


                    <span>
                        <input type="radio" id="option-three" name="option" class="radio" value="option3" />
                        <label for="option-three" class="option" id="option-three-label"></label>
                    </span>


                    <span>
                        <input type="radio" id="option-four" name="option" class="radio" value="option4" />
                        <label for="option-four" class="option" id="option-four-label"></label>
                    </span>


                </div>

                <div class="next-button-container">
                    <button onclick="handleNextQuestion()">Next Question</button>
                </div>

            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>