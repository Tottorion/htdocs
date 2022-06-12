<pre>
<?php
function showTrapezoidArea($topSide, $bottomSide, $height)
{
    print "面積は";
    print ($topSide + $bottomSide) * $height / 2;
};
showTrapezoidArea(10, 20, 8);
