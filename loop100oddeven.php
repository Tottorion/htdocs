<pre>
<?php
$value = 1;
for ( $value; $value <= 100; $value++ ) {
    if ( $value % 2 == 0 ) {
        print $value . "は偶数です\n";
    } else {
        print $value . "は奇数です\n";
    }
}
