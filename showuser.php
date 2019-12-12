<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "info";


	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);
	$conn->close();
?> 



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>USERS</title>
</head>
<body>
	<table border="1" style="width:100%" >
		<thead>
			<th>ID</th>
			<th>PASSWORD</th>
			<th>CONFIRM PASSWORD</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>USERTYPE</th>
		</thead>
		<tbody>
			<?php
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo'<tr>';
							echo '<td>'.$row['id'].'</td>';
							echo '<td>'.$row['password'].'</td>';
							echo '<td>'.$row['cpassword'].'</td>';
							echo '<td>'.$row['name'].'</td>';
							echo '<td>'.$row['email'].'</td>';
							echo '<td>'.$row['usertype'].'</td>';
						echo'</tr>';
					}
				}else {
					echo "No Entry Found!";
				}
			?>
		</tbody>
		
</body>
</html>