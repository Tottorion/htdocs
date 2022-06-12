<pre>
<?php
for ( $y = 1; $y <= 9; $y++ ) {
    for ( $x = 1; $x <= 9; $x++ ) {
        $sum = $x * $y;
        print ((($sum >= 10) or ($x == 1)) ? " " : "  " ) . $sum;
        }
    print "\n";
};