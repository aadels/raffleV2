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
			<input type='text' name='contestant1' placeholder="Contestant One" <?php if($_POST) echo "value=\"{$name[0]}\""?>><br>
			<input type='text' name='contestant2' placeholder="Contestant Two" <?php if($_POST) echo "value=\"{$name[0]}\""?>>><br>
			<input type='text' name='contestant3' placeholder="Contestant Three" <?php if($_POST) echo "value=\"{$name[0]}\""?>>><br>
			<input type='text' name='contestant4' placeholder="Contestant Four" <?php if($_POST) echo "value=\"{$name[0]}\""?>>><br>
			<input type='text' name='contestant5' placeholder="Contestant Five" <?php if($_POST) echo "value=\"{$name[0]}\""?>>><br>
			<input type='submit'value='Pick a winner!'><br>	
		</form>

	    <!--print results if form submitted-->
		<?php if($_POST): ?>

			<h3>The winning number is  <?=$winningNumber?>! </h3>

			<?php foreach($contestants as $index => $value): ?>
				<?=$index?> is a <?=$value?><br>
			<?php endforeach; ?>
		<?php endif; ?>	

	</body>



</html>