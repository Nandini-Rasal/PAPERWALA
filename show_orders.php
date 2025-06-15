<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: dist_login2.php");
    exit();
}

// Establish a connection to the database
$servername = "localhost"; // Assuming the database is hosted locally
$username = "root"; // Your MySQL username  
$password = ""; // Your MySQL password
$dbname = "paper"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username from the session
$username = $_SESSION['username'];

// Prepare a SQL query to fetch orders for the specific username
$sql = "SELECT * FROM dist_order WHERE Distributor = '$username'";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>

<body>

<h2>Orders for <?php echo $username; ?></h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Business Name</th>
        <th>No. of Pamphlets</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["busi_name"] . "</td>";
            echo "<td>" . $row["no_pamphlate"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No orders found</td></tr>";
    }
    ?>
</table>

<a href="dist_login2.php">Logout</a>

</body>

</html>

<?php
// Close connection
$conn->close();
