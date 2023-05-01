<?php

function hexcheck( $hexcolour ): string {
    if (count ($hexcolour) == 6){
        $count = 'true';
    }
    else {
        $count = 'false';
    }

    foreach ($hexcolour as $hexvalue){
        if (($hexvalue >= 0 && $hexvalue <= 9) || $hexvalue == 'a' ||
        $hexvalue == 'b' || $hexvalue == 'c' || $hexvalue == 'd' ||
            $hexvalue == 'e' || $hexvalue == 'f'){
            $hexvalues [] = 'true';
        }
        else {
            $hexvalues [] = 'false';
        }
    }
    if ($count == 'true' && in_array( 'false',$hexvalues) == FALSE ) {
        return 'Valid Hexcode';
    }
    else {
        return 'Invalid Hexcode';
    }
}

echo hexcheck(['1','c','4','e','f','f']);

