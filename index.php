<?php 
header("Access-Control-Allow-Origin: *");
?>
<html>
<head>
	<title>Login try</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>

<form action="#" method="post">
	<input type="text" name="roll" id="roll"><br>
	<input type="password" name="pass" id="pass"><br>
	<button type="submit" name="submit" id="submit">Login</button>
	<?php

	if(isset($_POST['submit'])) {
		require_once("login.php");

		$res = validate($_POST['roll'], $_POST['pass']);

		if($res == 88) {
			echo "Valid";
		} else {
			echo "Invalid";
		}
	}

	?>
</form>
</body>
</html>
