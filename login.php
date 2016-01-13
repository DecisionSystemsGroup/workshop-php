<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>
	<body>
		<center>
			<h2>Login</h2>
			<fieldset>
				<form action="login.php" method="post">
					Username: <input type="text" name="username" required>
					<br>
					Password: <input type="password" name="password" required>
					<br>
					<input type="submit" value="Login">
				</form>
				<br>
				If you don't have an account, register <a href="register.php">here</a>!
			</fieldset>
		</center>

<?php
	session_start();
	if(isset($_SESSION['username'])){
		header("Location: index.php");
		exit();
	}
	if($_POST){
		include("mysqli_connect.php");
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT email FROM users WHERE username='$username' AND password='$password'";	//This is just for demonstration purposes, please google "prepared statements" and "password hashing" for actual projects.
		$result = mysqli_query($dbc,$query);
		if($result->num_rows>0){
			$row = $result->fetch_assoc();
			session_start();
			$_SESSION['email'] = $row['email'];
			$_SESSION['username'] = $username;
			header('Location: index.php');
			exit();
		}
		else{
			echo "<center style=\"color: red\">Wrong username or password!</center>";
		}
	}
?>

	</body>
</html>