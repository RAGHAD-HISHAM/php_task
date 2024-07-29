<?php
// 6.	Write a program which will count the "c" characters in the text "Orange Coding Academy". 

// Sample Input: Orange Coding Academy
// Expected Output: 2

$text = "Orange Coding Academy";

$small_char = 'c';
$capital_char ='C';
$count = 0;

for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] === $small_char || $text[$i] === $capital_char ) {
        $count++;
    }

}

echo $count;
?>


