<!-- day1_basic -->
 
<?php 
// DAY_1
echo "<pre>";

echo"<h1>task1</h1>
<br><br>" ;



// • Create an indexed array with five different fruits.
$fruits = array("pinaple", "banana","bluberry","watermelon","peach");

// • Print all elements of the array using a loop
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}


echo "<hr>";



// • Add an element to the array and print the updated array.
array_push($fruits, "newApple" );
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

echo "<hr>";

// • Remove the last element from the array and print the updated array.
array_pop($fruits);
print_r($fruits);


echo "<hr>";

// • Check if a specific fruit exists in the array.
if (in_array("banana", $fruits , true))
  {
  echo "fruit found";
  }
else
  {
  echo "fruit not found";
  }

  echo "<br><br>";

  echo "<hr>";


////////////////////////////////////////////////////////



  echo"<h1>task2</h1>
  <br><br>" ;


  // • Create an associative array to store the names and ages of five people.
  $names = array(
    "raghad"=> 22,
    "kenan"=> 7,
    "rayyan"=> 19,
    "hesham"=> 45,
    "khaled"=>29
  );
  //• Print all key-value pairs of the array.
    print_r($names);


    echo "<hr>";

// • Add a new person to the array and print the updated array.
array_push($names, 30 );
print_r($names);


echo "<hr>";

 // • Remove a person from the array using their name as the key.
 unset($names["khaled"]);
 print_r($names);

 echo "<hr>";

//  • Check if a specific key exists in the array.
if (in_array("khaled", $names))
  {
  echo "person found";
  }
else
  {
  echo "person not found";
  }

  echo "<br><br>";

  echo "<hr>";


////////////////////////////////////////////////////////
 

echo"<h1>task3</h1>
<br><br>" ;
// • Create a multidimensional array to store the details of three students (name, age, grade).
$students = [
  "student1"=>array("name"=>"raghad","age"=>22, "grade"=>80),
   "student2"=>array("name"=>"rayyan","age"=>19,"grade"=>99),
  "student3"=>array("name"=>"kenan","age"=>7, "grade"=>89)

];

// • Print the details of all students.
print_r($students);

echo "<br><br>";

echo "<hr>";

// • Add a new student to the array and print the updated array.
$newStudent = [
  "name" => "new student",
  "age" => 25,
  "grade" => 95
];

$students["student4"] = $newStudent;
print_r($students);

echo "<br><br>";
echo "<hr>";

// • Update the grade of a specific student and print the updated array.
$students["student2"]["grade"] = 100;
print_r($students);

echo "<br><br>";
echo "<hr>";

// • Remove a student from the array and print the updated array.
unset($students["student1"]);

print_r($students);

echo "<br><br>";

echo "<hr>";


////////////////////////////////////////////////////////


echo"<h1>task4</h1>
<br><br>" ;

// • Use array_push() to add an element to an indexed array.
array_push($fruits, "strawberry");
print_r($fruits);

echo "<br><br>";
echo "<hr>";

// • Use array_pop() to remove the last element of an indexed array.
array_pop($students);
print_r($students);


echo "<br><br>";
echo "<hr>";

// • Use array_keys() to get all the keys of an associative array.
$names_keys = array_keys($names);
print_r($names_keys);

echo "<br><br>";
echo "<hr>";

// • Use array_values() to get all the values of an associative array.
$names_value = array_values($names);
print_r($names_value);

echo "<br><br>";
echo "<hr>";

// • Use count() to get the number of elements in an array.
echo (count($students));

echo "<br><br>";
echo "<hr>";

// • Use array_merge() to combine two arrays.
print_r(array_merge($fruits, $names));

echo "<br><br>";
echo "<hr>";

// • Use array_search() to find a specific value in an array.
print_r(array_search(19,$names));

echo "<br><br>";
echo "<hr>";

// • Use sort() to sort an indexed array.
$num = array(1,6,4,3,7,9);
sort($num);
foreach($num as $number){
print_r("$number\n");
};

echo "<br><br>";
echo "<hr>";

//• Use ksort() to sort an associative array by keys.
ksort($names);
print_r($names);

echo "<br><br>";
echo "<hr>";


// • Use asort() to sort an associative array by values. 
asort($names);
print_r($names);
  

echo "<br><br>";
echo "<hr>";


echo "</pre>";

?>
