<?php
session_start();
include("mysqli_connect.php");
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Register</title>
	</head>
	<body>

<?php
if(isset($_SESSION['username'])){
	header("Location: index.php");
	exit();
}

if($_POST){
	
	$errors=array();
	
	if(!empty($_POST['username'])){
		$username=$_POST['username'];
	}else{
		$errors['username']='Adio Username';
	}
	
	if(!empty($_POST['email'])){
		$email=$_POST['email'];
	}else{
		$errors['email']='Adio email';
	}
	
	if(!empty($_POST['password'])){
		$password=$_POST['password'];
	}else{
		$errors['password']='Adio Password';
	}
	
	if(empty($errors)){
		
		$q="INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
		$r=mysqli_query($dbc,$q);
		
			echo '<p><b>Register Complete<b></p>
			<p><a href="login.php">Login Here</a></p>';
			exit();
		
	}else{
		
		foreach($errors as $value){
			
			echo "<p><b>Error:</b><u> $value</u></p>";
			
		}
		
	}
	
}

?>
			<h2>Register</h2>
			<fieldset>
				<legend>Register</legend>
				<form action="register.php" method="post">
					Username: <input type="text" name="username" >
					<br>
					Email: <input type="text" name="email">
					<br>
					Password: <input type="password" name="password" >
					<br>
					<input type="submit" value="Register">
				</form>
		</fieldset>
	</body>
</html>