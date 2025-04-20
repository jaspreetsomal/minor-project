<?php
$servername = "localhost"; // Change if needed
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "cafe2"; // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

/* Check connection*/
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $conn->real_escape_string($_POST["message"]);

    // Insert data into database
    $sql = "INSERT INTO contact (name, email, phone, message) 
            VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Thank you! Your message has been received.'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

