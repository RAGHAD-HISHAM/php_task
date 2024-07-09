<!-- day1_basic -->
 
<?php 
// DAY_1
echo "<pre>";

echo"<h1>task1</h1>
<br><br>" ;



// Create an indexed array with ten different cities.
$cities = array("New York", "Paris","London","Tokyo","Sydney","Rio de Janeiro","Dubai","Toronto","Shanghai","Amman");


// •  Print all elements of the array in reverse order.
$reverse_cities = array_reverse($cities);
print_r($reverse_cities);


echo "<hr>";



// •  Find and print the index of a specific city in the array.
echo $cities[0];

echo "<hr>";

// •  Remove a city from the array by its value.
$removed_city = "Paris";

$find_city = array_search($removed_city, $cities);
if ($find_city !== false) {
    unset($cities[$find_city]);

}
print_r($cities);



echo "<hr>";

// •  Slice the array to get a sub-array of the first three cities.

if (in_array("banana", $fruits , true))
//   {
//   echo "fruit found";
//   }
// else
//   {
//   echo "fruit not found";
//   }

//   echo "<br><br>";

//   echo "<hr>";


// ////////////////////////////////////////////////////////



//   echo"<h1>task2</h1>
//   <br><br>" ;


//   // • Create an associative array to store the names and ages of five people.
//   $names = array(
//     "raghad"=> 22,
//     "kenan"=> 7,
//     "rayyan"=> 19,
//     "hesham"=> 45,
//     "khaled"=>29
//   );
//   //• Print all key-value pairs of the array.
//     print_r($names);


//     echo "<hr>";

// // • Add a new person to the array and print the updated array.
// array_push($names, "(newperson=>30)" );
// print_r($names);


// echo "<hr>";

//  // • Remove a person from the array using their name as the key.
//  unset($names["khaled"]);
//  print_r($names);

//  echo "<hr>";

// //  • Check if a specific key exists in the array.
// if (in_array("khaled", $names))
//   {
//   echo "person found";
//   }
// else
//   {
//   echo "person not found";
//   }

//   echo "<br><br>";

//   echo "<hr>";


// ////////////////////////////////////////////////////////
 

// echo"<h1>task3</h1>
// <br><br>" ;
// // • Create a multidimensional array to store the details of three students (name, age, grade).
// $students = [
//   "student1"=>array("name"=>"raghad","age"=>22, "grade"=>80),
//    "student2"=>array("name"=>"rayyan","age"=>19,"grade"=>99),
//   "student3"=>array("name"=>"kenan","age"=>7, "grade"=>89)

// ];

// // • Print the details of all students.
// print_r($students);

// echo "<br><br>";

// echo "<hr>";

// // • Add a new student to the array and print the updated array.
// $newStudent = [
//   "name" => "new student",
//   "age" => 25,
//   "grade" => 95
// ];

// $students["student4"] = $newStudent;
// print_r($students);

// echo "<br><br>";
// echo "<hr>";

// // • Update the grade of a specific student and print the updated array.
// $students["student2"]["grade"] = 100;
// print_r($students);

// echo "<br><br>";
// echo "<hr>";

// // • Remove a student from the array and print the updated array.
// unset($students["student1"]);

// print_r($students);

// echo "<br><br>";

// echo "<hr>";


// ////////////////////////////////////////////////////////


// echo"<h1>task3</h1>
// <br><br>" ;





// echo "</pre>";

// ?>
