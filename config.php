<?php 
$now = time(); // or your date as well
$your_date = strtotime("1994-09-01");
$datediff = $now - $your_date;
$ndays = round($datediff / (60 * 60 * 24));
?>