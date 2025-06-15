<?php
// Your database connection code
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "paper";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$query = $_POST['query'];

// Insert data into database
$sql = "INSERT INTO query (name, phone,email, query) VALUES ('$name', '$phone','$email','$query')";

if ($conn->query($sql) === TRUE) {
    // Data inserted successfully, redirect back to contact.php with success message
    header("Location: contact.php?success=true");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
