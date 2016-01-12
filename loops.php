<?php
	echo 'for: ';
	for($i=0;$i<10;$i++){
		echo $i.' ';
	}
	
	echo '<br>';
	
	echo 'while: ';
	$i=0;
	while($i<10){
		echo $i.' ';
		$i++;
	}
	
	echo '<br>';
	
	echo 'do while: ';
	$i=0;
	do{
		echo $i.' ';
		$i++;
	}while($i<10);
?>