<?php

$firstNumber = 0;
$secondNumber = 1;
$newNumber = 1;

echo "Fibonacci Series: ";
for($i=0; $i<10; $i++){
    // Check if the Fibonacci number exceeds 100
    if($firstNumber > 100){
        break;
    }
    // Print the current Fibonacci number
    echo $firstNumber . " ";
    
    // Calculate the next Fibonacci number and update the variables for the next iteration   
    $secondNumber = $newNumber;
    $newNumber = $firstNumber + $secondNumber;
    $firstNumber = $secondNumber;  
}