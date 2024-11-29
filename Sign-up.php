<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  // Removed the extra '}' here
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; 
    $password = $_POST['password'];
    
    // Database connection
    $con = new mysqli("localhost", "root", "Samiksha27&", "db_1");  // Change "DB" to your actual database name

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Insert user data
    $sql = "INSERT INTO users (username, email, phone, password) VALUES ('$username', '$email', '$phone', '$password')";
    // Change "myuser" to your actual table name

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();  // Closing the database connection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

/* Header */
header {
    padding: 1em;
    background: #333;
    color: #fff;
    text-align: center;
}

/* Product container */
.product-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1em;
    padding: 2em;
    justify-content: center;
}

.product-item {
    background: #fff;
    padding: 1em;
    border: 1px solid #ddd;
    border-radius: 8px;
    width: 200px;
    text-align: center;
}

.product-item h3 {
    margin-bottom: 0.5em;
}

.product-item button {
    padding: 0.5em 1em;
    background: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* Cart container */
.cart-container {
    padding: 2em;
    display: flex;
    flex-direction: column;
    gap: 1em;
    align-items: center;
}

.cart-item {
    background: #fff;
    padding: 1em;
    border: 1px solid #ddd;
    border-radius: 8px;
    width: 100%;
    max-width: 400px;
}

/* Login and Signup */
form {
    max-width: 400px;
    margin: 2em auto;
    padding: 2em;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form h1 {
    margin-bottom: 1em;
    text-align: center;
}

form input, form button {
    width: 100%;
    padding: 0.75em;
    margin-top: 1em;
}

form button {
    background: #333;
    color: #fff;
    border: none;
    cursor: pointer;
}
</style>
</head>
<body>
    <div class="container">
        <div class="signup-form">
            <h2>Sign Up</h2>
            <form action="index.php" method = "POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
            </form>
            <p class="text-center">Already have an account? <a href="Login.php">Log in here</a></p>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
