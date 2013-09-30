<?php
	/* do this only if form is posted*/
	if($_POST) {

		/*Count contestants posted and find a winning number*/
		$numberOfContestants = count($_POST);
		$winningNumber = rand(1,$numberOfContestants);

		/*loop through all contestants*/
		foreach($_POST as $inputName => $value{
	
			/*get random number*/
			$randomNumber = rand(1,$numberOfContestants);
	

			/*compare random number for each contestant to the wimnning number*/
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