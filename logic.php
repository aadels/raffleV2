<?php
	/* do this only if form is posted*/
	if($_POST) {

		/*Count contestants posted and find a winning number*/
		$numberOfContestants = count($_POST);
		$winningNumber = rand(1,$numberOfContestants);

		/*loop through all contestants*/
		# $inputName will be the name of the input field such as "contestant1" or "contestant2"
		# $value will be whatever was typed into that field
		$count = 0;
		foreach($_POST as $inputName => $value){

			//Save names in an array
			$name[$count] = $value;
			$count ++;

			//get random number
			$randomNumber = rand(1,$numberOfContestants);
	
			/*Compare random number for each contestant to the wimnning number to 
			see if there is a wilnner.
			first test to see if field was filled in.*/
			if ($value != ""){

				if ($randomNumber == $winningNumber){
					$contestants[$value] = "Winner!";
				}
				else{
					$contestants[$value] = "Loser :(";
				}
			}
		}
	}
?>