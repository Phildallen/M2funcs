<?php

$months = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December',
    'Invalid month',
    ];
/**
 * @param int $monthnumber
 * @return int
 */
function monthName(int $monthnumber): int
{
    if($monthnumber <= 0 ){
        return 12;
    }
    elseif($monthnumber >=13 ){
        return 12;
    }
    else {
        return $monthnumber -1;
    }
}

echo $months [monthName(7)];

echo '<p> </p>';

function sumSquares(int $nums): int
{
    $total = 0;
    foreach ($nums as $num){
        $total + $num * $num;
    }
    return $total;
}

echo sumSquares(1,2,3,4);

