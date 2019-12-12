<!DOCTYPE HTML>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form action="insert.php" method="POST">
		ID:<br>
		<input type="text" name="id" value="" required><br>
		Password:<br>
		<input type="password" name="password" value="" required><br>
		Comfirm Password:<br>
		<input type="passwrod" name="cpassword" value="" required><br>
		Name:<br>
		<input type="text" name="name" value="" required><br>
		Email:<br>
		<input type="email" name="email" value="" required><br>
		User Type:<br>
		<select name="usertype">
			<option>Admin</option>
			<option>User</option>
		</select>	<br>
		<input type="submit" value="Submit">
	</form>
		<li><a href="index.html">Back To Home</a></li>
</body>
</html>