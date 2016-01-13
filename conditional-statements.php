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
	
	echo "<br>";
	
	$fruit = "orange";
	
	switch($fruit){
		case "apple":
			echo "My favorite fruit is apple";
			break;
		case "orange":
			echo "My favorite fruit is orange";
			break;
		case "melon":
			echo "My favorite fruit is melon";
			break;
		default:
			echo "My favorite fruit is banana";
	}
?>
