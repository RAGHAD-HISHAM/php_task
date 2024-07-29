<?php
// 4.	Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number.

// Sample Input: 5 
// 5*4*3*2*1
// 20*6
// 120
// Expected Output: 120 


    
    $result = 1; 
    for ($i = 1; $i <= 5; $i++) {
        $result *= $i;
    }
    
echo $result; 










?>