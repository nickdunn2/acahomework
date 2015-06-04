<?php
$character = 'A';

$asciicode = ord($character);

echo "The ASCII code for $character is " . $asciicode . '<br>';

$char = chr($asciicode);

echo "The character for ASCII code for $asciicode is " . $char . '<br>';

?>