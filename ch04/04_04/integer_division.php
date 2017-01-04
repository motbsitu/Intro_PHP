<?php
// Convert $total_minutes to hours and minutes.

$total_minutes = 318;
$minutes = $total_minutes % 60;
// $hours = ($total_minutes - $minutes) /60;
// or new in php7
                //numerator     divisor
$hours = intdiv($total_minutes, 60);
echo "Time taken was $hours hours $minutes minutes";
