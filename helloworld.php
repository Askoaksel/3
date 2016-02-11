<?php

	// Variable starts with $
	// string has to use quotation marks
	// Line ends with semicolon
	$first_name = "Asko";
	$last_name = "Aksel";
	
	// Echo shows code to browser
	// For adding up numbers + sign
	// For adding up strings . sign
	echo $first_name." ".$last_name;

	// > greater than
	// < smaller than
	// >= greater than or equal
	// <= smaller than or equal
	// == equal
	// != not equal
	
	$age = 4;
	
	//if age is smaller than or equal to 6, then you can sleep at lunchtime
	if($age <=5){
		//if true
		echo " Yes you can sleep at lunchtime";
	}else{
		//if false
		echo " No, you are at school";
	}
?>

<br>

<?php

	// Loop
	
	for ($i=1; $i <= $age; $i=$i+1){
		
		// If condition is true
		echo $i;
		
	}

?>

<br>

<?php

	echo "Today is ".date("d.m Y:H:i");

?>