<?php
// Creating an indexed array
$fruits = array("Apple", "Banana", "Cherry");

// echo $fruits[0]; // Outputs: Apple
// echo "<br>";
// echo $fruits[1]; // Outputs: Banana
// echo "<br>";
// echo $fruits[2]; // Outputs: Cherry
echo count($fruits);


// Looping through an indexed array
// for ($i = 0; $i < count($fruits); $i++) {
//     echo $fruits[$i] . "<br>";

// }
?>

<hr>

<?php
// // Creating an associative array
// $ages = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

// // Accessing elements
// echo $ages["Peter"]; // Outputs: 35
// echo $ages["Ben"];   // Outputs: 37
// echo $ages["Joe"];   // Outputs: 43

// // Looping through an associative array
// foreach ($ages as $name => $age) {
//     echo "Name: $name, Age: $age ";
// }
?>

<hr>

<?php
// // Creating a multidimensional array
// $students = array(
//     "John" => array(
//         "Math" => 85,
//         "Science" => 90
//     ),
//     "Alice" => array(
//         "Math" => 78,
//         "Science" => 85
//     )
// );

// // Accessing elements
// echo $students["John"]["Math"];    // Outputs: 85
// echo $students["Alice"]["Science"]; // Outputs: 85

// // Looping through a multidimensional array
// foreach ($students as $name => $subjects) {
//     echo "Student: $name ";
//     foreach ($subjects as $subject => $score) {
//         echo "Subject: $subject, Score: $score ";
//     }
// }
?>
