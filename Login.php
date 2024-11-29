<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <div class="login-form">
            <h2>Login</h2>
            <form action="check_login.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <p class="text-center">Don't have an account? <a href="Sign-up.php">Sign up here</a></p>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
