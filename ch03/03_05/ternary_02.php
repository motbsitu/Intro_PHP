<?php
$unit_cost = 20;

//if evaluates to true assigned value of $unit_cost
$wholesale_price = $unit_cost ?: 25;

echo $wholesale_price;
