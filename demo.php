<!DOCTYPE html>
<html>

	<head>
		<title>Raffle v2</title>
		
		<?php
		require_once('logic.php');
		?>
	
	</head>
	
	<body>

		<!-- form for participant input-->
		<form method='POST' action ='demo.php'>
			Enter 5 contestants <br>
			<input type='text' name='contestant1'><br>
			<input type='text' name='contestant2'><br>
			<input type='text' name='contestant3'><br>
			<input type='text' name='contestant4'><br>
			<input type='text' name='contestant5'><br>
			<input type='submit'value='Pick a winner!'><br>	
		</form>
		
	 
		The winning number is <?=$winningNumber?>! <br><br>

		<? foreach($contestants as $name => $status): ?>
			<?=$name?> is a <?=$status?><br>
		<? endforeach; ?>

		<br><br>

		<?=$message?>

	</body>



</html>