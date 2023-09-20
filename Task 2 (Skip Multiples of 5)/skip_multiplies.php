<?php

echo "Prints numbers from 1 to 50 (Except multiples of 5):\n";

for($i=1; $i<=50; $i++){
    if($i % 5 == 0){
        // Skip multiplies of 5 using continue statement
        echo "==> Skip multiple of 5\n";
        continue;
    }
    echo $i . "\n";
}