<pre>
<?php

$topSide = 10;
$bottomSide = 20;
$height = 8;

function calcTrapezoidArea($topSide, $bottomSide, $height)
{
    $TrapezoidArea = ($topSide + $bottomSide) * $height / 2;
    return $TrapezoidArea;
}

print "面積は" . calcTrapezoidArea($topSide, $bottomSide, $height);
