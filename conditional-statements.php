<?php
	$x = 3;
	if($x>9){
		echo "$x > 9";
	}
	elseif($x<9){
		echo "$x < 9";
	}
	else {
		echo "$x = 9";
	}
	
	echo "<br>";
	
	echo ($x==9)?"Equals":"Not Equals";
?>
