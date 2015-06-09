<form action="functions.php" method="post">
	First Name: <input type="text" name="firstName"/>
	<input type="submit"/>
</form>	

<?php

// Collect the user input

// 'command + /' to highlight and comment everything out
// $_GET; // when you want to get things from the URL

// $_POST; // when you want to get things from a form that was submitted

// $_REQUEST; // when you want to get either of those things

// if (isset($_POST['firstName'])) {
// 	$enteredName = $_POST['firstName'];
// } else {
// 	$enteredName = '';
// }

// TERNARY (a one-line solution for simple If statements)
$enteredName = isset($_POST['firstName']) ? $_POST['firstName'] : null;


// Pass it into the function i.e. call the function

$functionOutput = sayHello($enteredName);

// Collect the return data from the function
// $functionOutput contains the data from the function

// Output the result from the function
echo '<h3>' . $functionOutput . '</h3>';

function sayHello($name){
	return 'Hello ' . $name;
}



?>