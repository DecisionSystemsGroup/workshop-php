<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: login.php");
	exit();
}
include("mysqli_connect.php");
?>
<html>
	<head>
	<title>Contact</title>
	</head>
	<body>

		<center>
			<h2>Minimata</h2>
		</center>

		<ul>
		  <li><a href="index.php">Index</a></li>
		  <li><a href="contact.php">Contact</a></li>
		  <li><a href="logout.php">Logout</a></li>
		</ul>

		<fieldset><legend>Minimata</legend>
<?php
$q="SELECT * FROM contact";
$r=mysqli_query($dbc,$q);

if(mysqli_num_rows($r)>0){

echo '<center><table><tr>
<th>ID</th>
<th>Onoma</th>
<th>Email</th>
<th>Minima</th>
</tr>';
while($row=mysqli_fetch_array($r,MYSQLI_ASSOC)){

	echo '<tr>
	<td>'.$row['con_id'].'</td>
	<td>'.$row['name'].'</td>
	<td>'.$row['email'].'</td>
	<td>'.$row['msg'].'</td>
	</tr>';
	
}
echo '</table>
</center>';

}else{
	
	echo '<center><h2>Den uparxoun minimata akoma</h2></center>';
	
}

?>
		</fieldset>


	</body>
</html>