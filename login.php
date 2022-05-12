<?php
session_start();

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

		function validatePassword(password){
			if(password <= 6){
				alert("Passwrd length must be more than 6 letters");
			}
		}

		function validateEmail(email) {
			console.log("hello");
			
			var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
			

			if (!email.match(pattern)) {
				alert("Email is invalid");
				location.reload();
			}
		}
	</script>

	<!-- Style-CSS -->
	<link href="styles/font-awesome.min.css" rel="stylesheet">
	<!-- //css files -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/style.css" type="text/css" media="all" />

</head>

<body>
	<div class="main-bg">
		<div class="sub-main-w3">
			<!-- vertical tabs -->
			<div class="container">
				<div class="vertical-tab">
					<div id="section1" class="section-w3ls">
						<input type="radio" name="sections" id="option1" checked>
						<label for="option1" class="icon-left-w3pvt"><span class="fa fa-user-circle" aria-hidden="true"></span>Login</label>
						<article>
							<form action="loginex.php" method="POST" id="reg_form">
								<h3 class="legend">Login Here</h3>
								<div class="input">
									<span class="fa fa-envelope-o" aria-hidden="true"></span>
									<input type="text" placeholder="Email" name="emailInput" id="emailInput" onchange="validateEmail(event.target.value)" required />
								</div>
								<div class="input">
									<span class="fa fa-key" aria-hidden="true"></span>
									<input type="password" placeholder="Password" id="passwordInput" name="passwordInput" onchange="validatePassword(event.target.value)" required />
								</div>
								<div class="d-grid gap-2 col-6 mx-auto">
									<input type="submit" class="btn btn-primary" name="login" value="Login">
								</div>
							</form>
						</article>
					</div>

					<div id="section2" class="section-w3ls">
						<input type="radio" name="sections" id="option2">
						<label for="option2" class="icon-left-w3pvt"><span class="fa fa-pencil-square" aria-hidden="true"></span>Register</label>
						<article>
							<form action="login.php" method="post" id="reg_form">
								<h3 class="legend">Register Here</h3>
								<div class="input">
									<span class="fa fa-envelope-o" aria-hidden="true"></span>
									<input type="text" placeholder="Email" name="emailInput" id="emailInput" onchange="validateEmail(event.target.value)" required />
								</div>
								<div class="input">
									<span class="fa fa-key" aria-hidden="true"></span>
									<input type="password" placeholder="Password" name="passwordInput" id="passwordInput" onchange="validatePassword(event.target.value)" required />
								</div>
								<div class="input">
									<span class="fa fa-key" aria-hidden="true"></span>
									<input type="password" placeholder="Confirm Password" name="passwordConfirm" id="passwordInput" onchange="validatePassword(event.target.value)" required />
								</div>
								<input type="radio" id="admin" name="roleInput" value="Admin">Admin
								<input type="radio" id="user" name="roleInput" value="User" checked>User

								<div class="d-grid gap-2 col-6 mx-auto">
									<input type="submit" value="Register" name="submit" class="btn btn-primary">

								</div>

							</form>
						</article>

					</div>
				</div>
			</div>

			<!-- //vertical tabs -->
			<div class="clear"></div>
		</div>
	</div>
	<script src="index.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<?php
	$server = "localhost";

	$username = "root";

	$password = "";


	$con = mysqli_connect($server, $username, $password);

	if (isset($_POST['submit'])) {
		$email = $_POST['emailInput'];
		$conform = $_POST['passwordConfirm'];
		$password = $_POST['passwordInput'];
		$role = $_POST['roleInput'];
		$flag = true;

		if(strlen($password)>6) {
			
		if($conform!=$password) {
			?>
			<script>
				alert("Password doesn't match!");
				// window.location = "login.php";
				
			</script>

		<?php
		$flag = false;
		}
		}
		else {
			?>
			<script>
				alert("Password length should be grater than 6!");
				window.location = "login.php";
				
			</script>

		<?php
		$flag = false;
		}
		  

		$sq = "SELECT `email` FROM `quiz`.`userinfo`;";

		$res = $con->query($sq);

		while ($row = mysqli_fetch_row($res)) {

			if ($email == $row[0]) {
	?>
				<script>
					alert("Username already exists!");
					window.location = "login.php";
					
				</script>

			<?php
			$flag = false;
			}
		}
		if ($flag) {
			$sql = "INSERT INTO `quiz`.`userinfo` (`email`, `password`, `role`) VALUES ('$email', '$password', '$role');";
			mysqli_query($con, $sql);

			$con->close();

			if ($role == "Admin") {
			?>
				<script>
					alert("Signup Successful!! Login as admin");
					window.location = "login.php";
				</script>
			<?php
			} else {
			?>
				<script>
					alert("Signup Successful!! Login as user");
					window.location = "login.php";
				</script>
	<?php
			}
		}
	}


	?>
</body>

</html>