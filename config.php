<?php 
$now = time(); // or your date as well
$your_date = strtotime("0000-00-00");
$datediff = $now - $your_date;
$ndays = round($datediff / (60 * 60 * 24));
?>