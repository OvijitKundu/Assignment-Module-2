<?php

function printFibonnaci($count){
    $firstNumber = 0;
    $secondNumber = 1;
    $newNumber = 1;

    for($i=0; $i<$count; $i++){
        // Print the current Fibonacci number
        echo $firstNumber . " ";
        
        // Calculate the next Fibonacci number and update the variables for the next iteration   
        $secondNumber = $newNumber;
        $newNumber = $firstNumber + $secondNumber;
        $firstNumber = $secondNumber;  
    }
}
echo "Print the first 15 numbers in the Fibonacci series: ";
printFibonnaci(15);