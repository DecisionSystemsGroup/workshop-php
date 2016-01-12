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
	
	echo '<br>';
	
	$y = array('Iosif', 'Giorgos', 'Kounas');
	echo 'foreach: ';
	foreach($y as $value){
		echo $value.' ';
	}
	
	echo '<br>';
	echo 'foreach+keys: ';
	foreach($y as $key => $value){
		echo $key.'=>'.$value.' ';
	}
?>