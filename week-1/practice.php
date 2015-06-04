<?php

//attempt 1
$integerIDs = array_map( 'intval', array_filter( explode(' ', $inputString), 'is_numeric' ) );

print_r($integerIDs);


//attempt 2
$num_numeric = array_filter($wordArray, 'is_numeric');
$num_string = array_filter($wordArray, 'is_string');
$num_bool = array_filter($wordArray, 'is_bool');
var_dump($num_numeric);
var_dump($num_string);
var_dump($num_bool);

//attempt 3
foreach ($array as $a) {
  foreach ($a as $b) {
    $count_values[$b]++;
  }
}

//irrelevant
$string = "1,2,3";
$ids = explode(',', $string);
var_dump($ids);

?>