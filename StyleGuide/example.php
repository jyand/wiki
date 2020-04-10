#!/bin/php
<?php
# Example of code following this style guide
# Optimally refactored version of the "FizzBuzz" meme
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
# Note that:
#       4 conditions are handled with only two 'if' statements
#       Control structure is easy to follow
?>
