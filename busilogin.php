<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Retrieve username and password from the form
    $email = $_POST['text']; // Assuming the input field name for email is 'email'
    $password = $_POST['password']; // Assuming the input field name for password is 'password'

    // Prepare a SQL query to check if the provided credentials exist in the database
    $sql = "SELECT * FROM Business WHERE username = '$email' AND password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User authenticated successfully
        // Set session variable and redirect to profile page
        $_SESSION['username'] = $email;
        header("Location: busi/welcome.php");
        exit(); // Stop further execution
    } else {
        // Invalid credentials
        echo "Invalid username or password";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login Page </title>
</head>

<body>
    <div class="container" id="container">
      


        <div class="form-container sign-in">
            <form method="POST">
            <h1>Business</h1>
            <h1>Sign In</h1>
                
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="text" name="text" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
               
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>

                    <button class="hidden" id="register">Click To Slide</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
