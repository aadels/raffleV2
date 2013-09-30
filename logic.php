<?php
	/* do this only if form is posted*/
	if($_POST) {

		/*Count contestants posted and find a winning number*/
		$numberOfContestants = count($_POST);
		$winningNumber = rand(1,$numberOfContestants);

		/*loop through all contestants*/
		foreach($_POST as $inputName => $status){
	
			/*get random number*/
			$randomNumber = rand(1,$numberOfContestants);
	

			/*compare random number for each contestant to the wimnning number*/
			if ($value != ""){

				if ($randomNumber == $winningNumber){
					$contestants[$status] = "Winner!";
				}
				else{
					$contestants[$status] = "Loser :(";
				}
			}
		}
	}
/*print message about winner(s), no winner, or tie
	if ($numberOfWinners > 1){
		$message = "We have a tie!";
	}
	elseif($numberOfWinners < 1){
		$message = "No winners this time. :(";
	}
	else{
		$message = "We have a winner!";
	}*/
?>