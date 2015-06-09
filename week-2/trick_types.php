<?php

$myType = "31";

$myCastedType = (int) $myType;

if (is_int($myCastedType) && $myCastedType != $myType) {
	echo "I am an integer";
	}
	else {
		echo "I am something else";
	}
}

?>