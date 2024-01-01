<?php
// Database connection code here

// Get form data
$name = $_POST['name'];
$lastname = $_POST['surname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hash the password for security

// Insert data into the table
$query = "INSERT INTO user_info_table (Name, Surname, Email, Password) VALUES ('$name', '$surname', '$email', '$password')";
// Execute the query (you'll need to handle database connection and error checking)

// Redirect to a welcome page
header("Location: welcome.php");
exit();
?>
