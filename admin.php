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
	<!-- Style-CSS 
	<link href="styles/font-awesome.min.css" rel="stylesheet">-->
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!-- web-fonts -->

</head>

<body>
	<div class="header">
		<a href="index.php" class="logo">Quiz</a>
		<div class="header-right">
			<a href="admin-home.php">Home</a>
			<a class="active" href="">Add Question</a>
		</div>
	</div>
	<div class="main-bg">
		<!-- title -->
		<!-- //title -->
		<!-- vertical tabs -->
		<div class="vertical-tab quetion-space">
			<div>
				<article>
					<form action="#" method="post">
						<h3 class="legend">Add Questions</h3>
						<div class="input">
							<span class="fa fa-envelope-o" aria-hidden="true"></span>
							<input type="text" placeholder="Question" name="question" required />
						</div>
						<div class="input">
							<span class="fa fa-key" aria-hidden="true"></span>
							<input type="text" placeholder="Option 1" name="option" required />
						</div>
						<div class="input">
							<span class="fa fa-key" aria-hidden="true"></span>
							<input type="text" placeholder="Option 2" name="option" required />
						</div>
						<div class="input">
							<span class="fa fa-key" aria-hidden="true"></span>
							<input type="text" placeholder="Option 3" name="option" required />
						</div>
						<div class="input">
							<span class="fa fa-key" aria-hidden="true"></span>
							<input type="text" placeholder="Option 4" name="option" required />
						</div>
						<!--Radio button for correct ans-->
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
					<h2>Tags</h2>
					<div class="chips chips-autocomplete"></div>
					<button type="button" class="btn btn-primary">
						<span class="glyphicon glyphicon-random"></span>Add Tag</button>
				</article>
			</div>
		</div>

		<!-- //vertical tabs -->
		<div class="clear"></div>
	</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
		var tag_auto = document.querySelectorAll(".chips-autocomplete");
		M.Chips.init(tag_auto,{
			autocompleteOption:{
				data:{
					'History':null,
					'Chemistry':null,
					'Maths':null,
					'Physics':null
				}
			}
		})
	</script>
</body>

</html>