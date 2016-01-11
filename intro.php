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
	
	$y = array('Iosif', 'Giorgos', 'Kounas');
	print_r($y);
	
	$y = array(5=>'Iosif', 'Giorgos', 'Kounas');
	echo '<br>';
	print_r($y);
	echo '<br>';
	echo $y[6];
	
	$y = array('Iosif'=>15, 'Giorgos'=>20, 'Kounas'=>17);
	echo '<br>';
	print_r($y);
	echo '<br>';
	echo $y['Giorgos'];
	
?>