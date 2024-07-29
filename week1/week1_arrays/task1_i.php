<!-- day1_i -->
 
<?php 
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
$city ="Paris";
$index = array_search($city ,$cities);

if ($index == TRUE) {
    echo "The index of $city is $index.";
} else {
    echo "$city is not in the array.";
};
echo "<hr>";

// •  Remove a city from the array by its value.
$removed_city = "Paris";
$find_city = array_search($removed_city, $cities);
if ($find_city == true) {
    unset($cities[$find_city]);
}
print_r($cities);



echo "<hr>";

// •  Slice the array to get a sub-array of the first three cities. 


$first_three = array_slice($cities, 0, 3);

print_r($first_three);



  echo "<br><br>";

  echo "<hr>";


// ////////////////////////////////////////////////////////



  echo"<h1>task2</h1>
  <br><br>" ;


 // •  Create an associative array to store the products and their prices.
  $products = array(
    "q_pro1"=> 22,
    "r_pro2"=> 7,
    "a_pro3"=> 19,
    "t_pro4"=> 45,
    "z_pro5"=>29
  );

 //•  Print the array sorted by product names.

ksort($products);

print_r($products);


echo "<hr>";


// •  Print the array sorted by prices.
asort($products);
print_r($products);

echo "<hr>";

// •  Calculate and print the average price of all products.
// avarege = sum / number of element
 $sum = array_sum($products);
 $number_of_products = count($products);
 $avarage =  $sum / $number_of_products;
echo $avarage;

echo "<hr>";


// •  Find and print the most expensive product.
$most_expensive = max($products);
echo $most_expensive;

echo "<br><br>";

echo "<hr>";


// ////////////////////////////////////////////////////////



echo"<h1>task3</h1>
<br><br>" ;

// •  Create a multidimensional array to store a list of books (title, author, year).
$books = [
  "book1"=>array("title"=>"The Brothers Karamazov","author"=>"Fyodor Dostoevsky", "year"=>1880),
  "book2"=>array("title"=>"1984","author"=>"George Orwell","year"=>1949),
  "book3"=>array("title"=>"Pride and Prejudice","author"=>"Jane Austen", "year"=>1813)

];

// •  Print the details of all books published after 1900.
foreach ($books as $book) {
  if ($book["year"] > 1900) {
      print_r($book);
  }
}

echo "<hr>";
// •  Add a new book to the array and print the updated array.
$books["book4"] = array("title" => "To Kill a Mockingbird", "author" => "Harper Lee", "year" => 1960);

print_r($books);

echo "<hr>";

// •  Update the author of a specific book and print the updated array.

$books["book1"]["author"]= "Dostoevsky";
print_r($books);

echo "<hr>";

// •  Sort the books by title and print the sorted array.
usort($books, function($a, $b) {
  return strcmp($a["title"], $b["title"]);
});

print_r($books);


echo "<br><br>";

echo "<hr>";


// ////////////////////////////////////////////////////////



echo"<h1>task4</h1>
<br><br>" ;

// •  Use array_map() to convert all elements of an indexed array to uppercase. $cities

$upper_array = array_map('strtoupper',$cities);
print_r($upper_array);

echo "<hr>";

// •  Use array_filter() to filter out elements of an array that do not meet a condition.
function startwitht ($city) {
  return strpos($city , "T") === 0 ;
};

$filtered_array = array_filter($cities,"startwitht");

print_r($filtered_array);

echo "<hr>";

// •  Use array_reduce() to find the sum of all values in an indexed array.

$numbers = [1, 2, 3];
$sum = array_reduce($numbers, function($x, $y) {
  return $x + $y;
}, 0); 

echo $sum;

echo "<hr>";

// •  Use array_walk() to apply a function to all elements of an array.
function add_two (&$num){
  return $num = $num + 2;
};
 array_walk($numbers,"add_two");

print_r($numbers);

echo "<hr>";

// •  Use array_diff() to find the difference between two arrays.
$num2 = array(1,2,3,4,5,67);
print_r(array_diff($num2 ,$numbers));

echo "<hr>";

// •  Use array_intersect() to find the common elements between two arrays.
print_r(array_intersect($num2 ,$numbers));

echo "<hr>";

// •  Use array_combine() to create an associative array from two indexed arrays.
$keys = ["a","b","c"];
$value =[1,2,3];
print_r(array_combine($keys,$value));

echo "<hr>";


// •  Use array_column() to get a specific column from a multidimensional array.
print_r(array_column($books,"author"));

echo "<hr>";

// •  Use array_slice() to extract a portion of an array.
print_r($cities); //printed just to see the difference!
print_r(array_slice($cities,3,2));


echo "<hr>";


// •  Use in_array() to check if a value exists in an array.
$check_this_city = "Amman";
print_r(in_array($check_this_city,$cities));//output: 1 means true amman is found in cities array