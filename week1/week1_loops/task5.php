

<!-- uncompleted -->


<?php
// 5.	Write a program to calculate and print the Fibonacci sequence using a for loop.

// Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 


// Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, …

function Fibonacci($num)  {
    $sum_of_previous_two = 0;

    for ($i=1; $i < $num  ; $i++) { //i<3
            $sum_of_previous_two += ($i-1) ; //sum = 0 + 0 = 0
                                             //sum = 0 + 1 = 1
                                             //sum = 1 + 2 = 3

        echo $sum_of_previous_two;
    }
}

Fibonacci(3);


?>