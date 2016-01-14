<?php
	echo "Hello World!<br>";
	
	$x=1;
	echo "Na lola $x mhlo!<br>";	//correct
	echo 'Na lola $x mhlo!<br>';	//false
	
	echo 'Na lola '.$x.' mhlo!<br>';
	echo 'Na <u>lola</u> <b>'.($x+1).'</b> mhla!<br>';
	
	echo $y="hello";
	echo '<br>';
	echo $y=5;
	echo '<br>';
	echo $y=true;
	echo '<br>';
	
	$names = array('Iosif', 'Giorgos', 'Kounas');
	print_r($names);
	
	$names = array(5=>'Iosif', 'Giorgos', 'Kounas');
	echo '<br>';
	print_r($names);
	echo '<br>';
	echo $names[6];
	
	$ages = array('Iosif'=>15, 'Giorgos'=>20, 'Kounas'=>17);
	echo '<br>';
	print_r($ages);
	echo '<br>';
	echo $ages['Giorgos'];
	
?>