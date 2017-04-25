
<!DOCTYPE html>
<html>
<head>
	<title>Roll the Dice!</title>

	<style>
		
		body {
			background-color: #383836;
			color: white;
			font-size: 4vw;
			text-align: center;
		}

	</style>
</head>
<body>

	<?php 
		if (isset($guess) && $guess == $randomNumber) {
			echo 'Your guess of ' . $guess . ' was correct!';
			echo '<br> The dice rolled ' . $randomNumber;
			echo '<br><img src="../yay.gif" alt="Yay!" width="400px" height="250px">';
		} else if (isset($guess) && $guess != $randomNumber) {
			echo 'Your guess of ' . $guess . ' was incorrect!';
			echo '<br> The dice rolled ' . $randomNumber;
			echo '<br><img src="../boo.gif" alt="Boo!" width="400px" height="250px">';
		} else {
			echo 'The dice rolled ' . $randomNumber;
		} 
	?>

</body>
</html>