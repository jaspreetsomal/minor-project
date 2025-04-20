<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "cafe2");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$rating = $_POST['rating'];
$message = $_POST['message'];

// Insert into database
$sql = "INSERT INTO feedback (name, email, rating, message)
        VALUES ('$name', '$email', '$rating', '$message')";

if (mysqli_query($conn, $sql)) {
  echo "Thank you for your feedback!";
} else {
  echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

