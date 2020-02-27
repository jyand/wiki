#!/bin/php
<?php
# if you can't figure out what is going on here, comments are not going to help you
        function fixbux($a, $b, $N) {
                for ($i = 1 ; $i <= $N ; ++$i) {
                        echo "{$i} " ;
                        if ($i % $a == 0) {
                                echo "fix" ;
                        }
                        if ($i % $b == 0) {
                                echo "bux" ;
                        }
                        echo "\n" ;
                }
        }
        fixbux(3, 5, 105) ;
?>
