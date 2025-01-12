<?php

include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $sql = "INSERT INTO user (username, password, email, name, phoneNumber) VALUES ('$username', '$pass', '$email', '$name', '$phone')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register | Welcome to our family! </title>
    <style>
      body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, rgb(3, 34, 56),rgb(20, 78, 161));
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      margin-top: 170px;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }

    h1 {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      text-align: left;
      padding-left: 20px;
    }

    input {
      width: 250px;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
            <h6>Welcome to our family of pawsome friends!</h6>
        <form method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Your username" required><br><br>
        
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Your password" required><br><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email" required><br><br>

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name" required><br><br>

            <label for="phone">Phone number</label>
            <input type = "text" id="phone" name="phone" placeholder="Your phone number" required><br><br>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
