<?php

$today = date('m/d/Y');

echo '$today=' . $today;

$nixTimestamp = strtotime('now');

echo '<br/>';
echo '$nixTimestamp=' . $nixTimestamp;

$formattedDate = date('m/d/Y', $nixTimestamp);
echo '<br/>';
echo '$formattedDate=' . $formattedDate;

?>