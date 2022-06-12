<pre>
<?php
function showTrapezoidArea($topSide, $bottomSide, $height) {
    return ($topSide + $bottomSide) * $height / 2;
};
print "面積は";
print showTrapezoidArea(10, 20, 8);