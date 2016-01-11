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
	
?>