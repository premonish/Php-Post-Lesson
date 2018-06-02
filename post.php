<?php

print_r($_POST);

if ($_POST) {
	$family = array("Ram", "Preeti", "Prem", "Shyam");
	$isKnown = false;
	foreach ($family as $value) {
		if ($value == $_POST['name']) {
			$isKnown = true;
		}
	}
	
	if ($isKnown) {
		echo "Hi there ".$_POST['name']."!";
		} else {
		echo "Who are you?";
		}
	}

?>

<form method="POST">
	<p>What is your name?</p>
	<p><input type="text" name="name"></p>
	<p><input type="submit" value="submit"></p>
</form>