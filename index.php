<?php
$servername= "localhost";
$username= "root";
$password= "roosh";
$database= "sales";

$conn = new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
//echo "Connected successfully";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
			Admin
	</title>
</head>
<body>
<form id="admin" method="post" action = "check.php" >
	<fieldset>
		<legend>Admin Portal</legend>
		<ul>
			<li>
				<label for= "usernaem">Username </label>
				<input type="text" name="username" required>
			</li><br>
			<li>
				<label for="pass">Password</label>
				<input type="password" name="pass" required>	
			</li><br>
			<li>
				<select name="role">
				<option>Administrator</option>
				<option>Employee</option>
				</select>
				
				</li>
			<li>
				<input type="submit" name="login" value="login">
			</li>
		</ul>
	</fieldset>
</form
</body>
</html>