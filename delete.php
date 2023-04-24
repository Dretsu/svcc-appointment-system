<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "","user_input");
// Get the ID of the row to be deleted
$id = $_GET["id"];

// Delete the row from the database
mysqli_query($conn, "DELETE FROM users WHERE id = $id");

// Redirect the user back to the page with the table
header("Location: grade10tb.php");

// Close the database connection
mysqli_close($conn);
?>