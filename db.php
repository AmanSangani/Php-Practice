<!-- --------------------MySQLi Object-Oriented---------------------------------------------------- -->

<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE test_database";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

// sql to add new data to table
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>





<!-- --------------------MySQLi Procedural---------------------------------------------------- -->

<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

// $conn = mysqli_connect($servername, $username, $password);

// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

// Create database
// $sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

// mysqli_close($conn);
?>



<!-- -------------------PDO---------------------------------------------------- -->

<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";

//   $sql = "CREATE DATABASE myDBPDO";
//   $conn->exec($sql);
//   echo "Database created successfully<br>";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }
?>