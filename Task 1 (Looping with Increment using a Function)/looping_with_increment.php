<?php

// Function using a for loop
function printEvenUsingFor($start, $end, $step){
    for($i=$start; $i<=$end; $i+=$step){
        if($i % 2 == 0){
            echo $i . ", ";
        }else{
            $i++;
            echo $i . ", ";
        }      
    }
}


// Function using a while loop
function printEvenUsingWhile($start, $end, $step){
    $i=$start;
    while($i<=$end){
         if($i % 2 == 0){
            echo $i . ", ";
        }else{
            $i++;
            echo $i . ", ";
        }
        $i+=$step;
    }
}


// Function using a do-while loop
function printEvenUsingDoWhile($start, $end, $step){
    $i=$start;
    do{
        if($i % 2 == 0){
            echo $i . ", ";
        }else{
            $i++;
            echo $i . ", ";
        }
        $i+=$step;
    }
    while($i<=$end);
}


// Call the functions to print even numbers
echo "Using For loop prints Even Numbers:\n";
printEvenUsingFor(1,20,2);

echo "\n\nUsing While loop prints Even Numbers:\n";
printEvenUsingWhile(1,20,2);

echo "\n\nUsing Do-While loop prints Even Numbers:\n";
printEvenUsingDoWhile(1,20,2);