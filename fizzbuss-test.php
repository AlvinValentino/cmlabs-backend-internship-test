<?php
$max = 100;

for($i = 1; $i <= $max; $i++) {
    switch ($i) {
        case $i % 3 == 0 && $i % 5 == 0:
            echo "FizzBuzz <br>";
            break;
        case ($i % 3 == 0):
            echo "Fizz <br>";
            break;
        case ($i % 5 == 0):
            echo "Buzz <br>";
            break;
        default:
            echo "$i <br>";
    }
}
?>