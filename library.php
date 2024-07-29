<?php

// Create connection
// $any_str = new mysqli($servername, $username, $password, $dbname);
$connection = new mysqli("localhost", "root", "", "LibrarySystem");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    echo "Connected successfully<br>";
} catch (mysqli_sql_exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
//////////////////////////////////////////////////
<?php

$servername = "localhost";
$username = "mohammed"; //defult  root
$password = "test1234"; //  فاضي 
$dbname ="Mydb";

//creat connection
$conn = new mysqli($servername, $username, $password,$dbname);

//error handling

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{echo "good";}

// insert into table
$insert = "INSERT INTO table_name (column1, column2, column3)
 VALUES ('value1', 'value2', 'value3')";




// read data 
$read = "SELECT id, column1, column2 FROM table_name";


// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = $conn->query($sql);


//error handling
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}


// delete from table 
$delete = "DELETE FROM table_name WHERE id=1";



$result = $connection->query($update);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["column1"]. " " . $row["column2"]. "<br>";
    }
} else {
    echo "0 results<br>";
}





$sql = "DELETE FROM MyGuests WHERE id=7";


// error handling
if ($connection->query($sql) === TRUE) {
  echo "successful";
} else {
  echo "Error: " . $conn->error;
}


// update 
$update = "UPDATE table_name 
            SET column1='new_value1', column2='new_value2'
            WHERE id=1";
 
 
// $sql = "UPDATE MyGuests SET lastname='mohammed' WHERE id=1";
//error handling
// if ($conn->query($sql) === TRUE) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . $conn->error;
// }

//end the connection
$conn->close();