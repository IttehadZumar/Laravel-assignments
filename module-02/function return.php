<?php
function avg($x, $y): int | float
{
    $res = ($x + $y) / 2;
    return $res;
}

echo avg(12, 13);
