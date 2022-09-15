<?php 
$now = time(); // or your date as well
$your_date = strtotime("2022-09-03");
$datediff = $now - $your_date;
$ndays = round($datediff / (60 * 60 * 24));
?>