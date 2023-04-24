<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_input1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$id = $_POST["id"];
$pname = $_POST["pname"];
$name = $_POST["name"];
$sec = $_POST["sec"];
$datepicker = $_POST["datepicker"];
$timepicker = $_POST["timepicker"];

// Insert data into database
$sql = "INSERT INTO users1 (id, pname, name, sec, datepicker, timepicker) VALUES ('$id','$pname', '$name', '$sec', '$datepicker' , '$timepicker')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();
?>

