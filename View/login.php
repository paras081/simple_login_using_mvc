<html>
	<head>
		<title>SimpleMVCApp.com</title>
	</head>
	<body>
	<?php
		echo $result;
	?>
		<form action="" method="POST">
			<p>
				<label for="username">Username</label>
				<input id="username" value="" name="username" type="text" required="required"/></br>
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" value="" name="password" type="password" required="required" /></br>
			</p>
			<p>
				<button type="submit" name="submit">Login</button>
			</p>
		</form>
	</body>
</html>