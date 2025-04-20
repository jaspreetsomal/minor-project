<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "cafe2";

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die(" Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $conn->real_escape_string($_POST['customer_name']);
    $email    = $conn->real_escape_string($_POST['email']);
    $phone    = $conn->real_escape_string($_POST['phone']);
    $item     = $conn->real_escape_string($_POST['item_name']);
    $price    = (float)$_POST['price'];
    $quantity = (int)$_POST['quantity'];

    $sql = "INSERT INTO orders (customer_name, email, phone, item_name, price, quantity) 
            VALUES ('$name', '$email', '$phone', '$item', $price, $quantity)";

    if ($conn->query($sql)) {
        echo "<h2> Order placed successfully!</h2>";
    } else {
        echo "<h2>  Error: " . $conn->error . "</h2>";
    }
} else {
    echo "<h2>No data submitted.</h2>";
}

$conn->close();
?>
