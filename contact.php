<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: login.php");
	exit();
}
include("mysqli_connect.php");?>
<html>
	<meta charset="UTF-8">
	<head>
		<title>Contact</title>
	</head>
	<body>
		<center>
			<h2>Contact Form</h2>
		</center>
		<ul>
		  <li><a href="index.php">Index</a></li>
		  <li><a href="contact.php">Contact</a></li>
		  <li><a href="logout.php">Logout</a></li>
		</ul>
<?php

if($_POST){
	
	$errors=array();
	
	if(!empty($_POST['name'])){
		$name=$_POST['name'];
	}else{
		$errors['name']='Adio Name';
	}
	
	if(!empty($_POST['email'])){
		$email=$_POST['email'];
	}else{
		$errors['email']='Adio email';
	}
	
	if(!empty($_POST['msg'])){
		$msg=$_POST['msg'];
	}else{
		$errors['msg']='Adio msg';
	}
	
	if(empty($errors)){
		
		$q="INSERT INTO contact(name,email,msg) VALUES ('$name','$email','$msg')";
		$r=mysqli_query($dbc,$q);
		
			echo '<p><b>To minima kataxorithike me epitixeia<b></p>';
		
	}else{
		
		foreach($errors as $value){
			
			echo "<p><b>Error:</b><u> $value</u></p>";
			
		}		
	}	
}

?>
		<fieldset><legend>Contact</legend>
			<form action="contact.php" method="post">
				Name: <input type="text" name="name" >
				<br>
				Email: <input type="text" name="email" value="<?php echo $_SESSION['email']?>">
				<br>
				<textarea rows="4" cols="50" name="msg"></textarea>
				<br>
				<input type="submit" value="Send">
			</form>
		</fieldset>
	</body>
</html>