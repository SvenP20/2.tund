<?php

	$first_name = "Sven";
	$last_name = "Paalberg";
	

	echo $first_name." ".$last_name;
	
?>

<br/>

<?php
	$age = 5;
	
	//kui on väiksem kui 18, siis alaealine
	//kui on suurem siis täisealine
	if($age<18) {
		//tõene
		echo "alaealine";
		}
		
		else {
			echo "täisealine";
		}
?>

<?php
	// nii mitu korda trüki välja "palju ", kui palju on vanust
	
	for($i = 0; $i < $age; $i = $i + 1) {
		
		// see mida korrutatakse
		echo "palju ".$i." ";
		
	}

	echo "õnne";
	
	
?>

<br/>

<?php

	// kuupäev kujul: Friday, 11.09.2015
	echo( date("l, j.m.y") );





?>





